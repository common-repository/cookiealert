       jQuery(document).ready(function(){

            const COOKIE_VALUE = 1;

            function consentWithCookies() {
                setCookie('cookieAlert', COOKIE_VALUE, 365 * 20);
                hideCookieDialog();
            }

            function cookieExists(name) {
                return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
            }

            function hideCookieDialog() {
                const dialogs = document.getElementsByClassName('js-cookie-consent');
				
                for (let i = 0; i < dialogs.length; ++i) {
                    //dialogs[i].style.display = 'none';
					
					dialogs[i].classList.add("cookie-hidden");
                }
            }

            function setCookie(name, value, expirationInDays) {
                const date = new Date();
                date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
                document.cookie = name + '=' + value + '; ' + 'expires=' + date.toUTCString() +';path=/';
            }

            if(cookieExists('cookieAlert')) {
                hideCookieDialog();
            }

            const buttons = document.getElementsByClassName('js-cookie-consent-agree');

            for (let i = 0; i < buttons.length; ++i) {
                buttons[i].addEventListener('click', consentWithCookies);
            }
			const closeButtons = document.getElementsByClassName('wk-cookie-close');
			for (let i = 0; i < buttons.length; ++i) {
                closeButtons[i].addEventListener('click', hideCookieDialog);
            }
			

            return {
                consentWithCookies: consentWithCookies,
                hideCookieDialog: hideCookieDialog
            };
        });