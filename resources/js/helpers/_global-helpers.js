import * as radash from 'radash';
import StringHelpers from '@/helpers/string-helpers'
import * as colorTheme from '@/helpers/color-theme'
import * as cookieManager from '@/helpers/cookie-manager'

globalThis.cookieManager = cookieManager;
globalThis.colorTheme = colorTheme;
globalThis.colorTheme.loadTheme();
globalThis.colorTheme.listenSchemeChange();

globalThis.StringHelpers = StringHelpers();
globalThis._ = radash;
globalThis.radash = radash;
globalThis.lodash = 'Try "radash"';

document.addEventListener('DOMContentLoaded', globalThis.colorTheme.loadTheme);
