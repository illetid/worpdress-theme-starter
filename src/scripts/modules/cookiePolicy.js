class cookiePolicy {

    constructor() {
        let cookie_name = "cookie_policy";
        let cookie_value = "true";
        let year = 3600 * 24 * 12;
        let cookieOptions = {
            expires: year
        };

        this.setCookie(cookie_name, cookie_value, cookieOptions);

    }

    setCookie(name, value, options) {

        options = options || {};

        let expires = options.expires;

        if (typeof expires == "number" && expires) {
            let d = new Date();
            d.setTime(d.getTime() + expires * 1000);
            expires = options.expires = d;
        }
        if (expires && expires.toUTCString) {
            options.expires = expires.toUTCString();
        }

        value = encodeURIComponent(value);

        let updatedCookie = name + "=" + value;

        for (let propName in options) {
            updatedCookie += "; " + propName;
            let propValue = options[propName];
            if (propValue !== true) {
                updatedCookie += "=" + propValue;
            }
        }

        document.cookie = updatedCookie;
    }
}

export default cookiePolicy;