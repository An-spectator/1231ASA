ALTER TABLE `zt_story` MODIFY `status` enum('','changed','active','draft','closed','reviewing') NOT NULL DEFAULT '' AFTER `estimate`;
UPDATE `zt_story` SET `status` = 'reviewing' WHERE `status` = 'changed';
ALTER TABLE `zt_story` MODIFY `status` enum('','changing','active','draft','closed','reviewing') NOT NULL DEFAULT '' AFTER `estimate`;

ALTER TABLE `zt_feedback` ADD `repeatFeedback` mediumint(8) NOT NULL DEFAULT 0 AFTER `feedbackBy`;

ALTER TABLE `zt_assetlib` ADD `order` SMALLINT  UNSIGNED  NOT NULL  DEFAULT '0'  AFTER `desc`;
ALTER TABLE `zt_testsuite` ADD `order` SMALLINT  UNSIGNED  NOT NULL  DEFAULT '0'  AFTER `type`;

ALTER TABLE `zt_bug` MODIFY COLUMN `os` varchar(255) NOT NULL default '';
ALTER TABLE `zt_bug` MODIFY COLUMN `browser` varchar(255) NOT NULL default '';

INSERT IGNORE INTO `zt_lang` (`lang`, `module`, `section`, `key`, `value`, `system`, `vision`) VALUES
('zh-cn', 'bug', 'browserList', 'all',      '全部',           '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'chrome',   'Chrome',         '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'edge',     'Edge',           '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'ie',       'IE系列',         '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'ie11',     'IE11',           '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'ie10',     'IE10',           '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'ie9',      'IE9',            '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'ie8',      'IE8',            '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'ie7',      'IE7',            '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'ie6',      'IE6',            '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'firefox',  'firefox系列',    '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'firefox4', 'firefox4',       '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'firefox3', 'firefox3',       '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'firefox2', 'firefox2',       '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'opera',    'Opera系列',      '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'opera11',  'opera11',        '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'opera10',  'opera10',        '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'opera9',   'opera9',         '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'safari',   'safari',         '1', 'rnd'),
('zh-cn', 'bug', 'browserList', '360',      '360浏览器',      '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'qq',       'QQ浏览器',       '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'maxthon',  '遨游',           '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'uc',       'UC',             '1', 'rnd'),
('zh-cn', 'bug', 'browserList', 'other',    '其他',           '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'all',      '全部',           '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'chrome',   'Chrome',         '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'edge',     'Edge',           '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'ie',       'IE系列',         '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'ie11',     'IE11',           '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'ie10',     'IE10',           '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'ie9',      'IE9',            '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'ie8',      'IE8',            '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'ie7',      'IE7',            '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'ie6',      'IE6',            '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'firefox',  'firefox系列',    '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'firefox4', 'firefox4',       '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'firefox3', 'firefox3',       '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'firefox2', 'firefox2',       '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'opera',    'Opera系列',      '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'opera11',  'opera11',        '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'opera10',  'opera10',        '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'opera9',   'opera9',         '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'safari',   'safari',         '1', 'rnd'),
('zh-tw', 'bug', 'browserList', '360',      '360瀏覽器',      '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'qq',       'QQ瀏覽器',       '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'maxthon',  '遨游',           '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'uc',       'UC',             '1', 'rnd'),
('zh-tw', 'bug', 'browserList', 'other',    '其他',           '1', 'rnd'),
('en',    'bug', 'browserList', 'all',      'All',            '1', 'rnd'),
('en',    'bug', 'browserList', 'chrome',   'Chrome',         '1', 'rnd'),
('en',    'bug', 'browserList', 'edge',     'Edge',           '1', 'rnd'),
('en',    'bug', 'browserList', 'ie',       'IE series',      '1', 'rnd'),
('en',    'bug', 'browserList', 'ie11',     'IE11',           '1', 'rnd'),
('en',    'bug', 'browserList', 'ie10',     'IE10',           '1', 'rnd'),
('en',    'bug', 'browserList', 'ie9',      'IE9',            '1', 'rnd'),
('en',    'bug', 'browserList', 'ie8',      'IE8',            '1', 'rnd'),
('en',    'bug', 'browserList', 'ie7',      'IE7',            '1', 'rnd'),
('en',    'bug', 'browserList', 'ie6',      'IE6',            '1', 'rnd'),
('en',    'bug', 'browserList', 'firefox',  'Firefox series', '1', 'rnd'),
('en',    'bug', 'browserList', 'firefox4', 'Firefox4',       '1', 'rnd'),
('en',    'bug', 'browserList', 'firefox3', 'Firefox3',       '1', 'rnd'),
('en',    'bug', 'browserList', 'firefox2', 'Firefox2',       '1', 'rnd'),
('en',    'bug', 'browserList', 'opera',    'Opera series',   '1', 'rnd'),
('en',    'bug', 'browserList', 'opera11',  'Opera11',        '1', 'rnd'),
('en',    'bug', 'browserList', 'opera10',  'Opera10',        '1', 'rnd'),
('en',    'bug', 'browserList', 'opera9',   'Opera9',         '1', 'rnd'),
('en',    'bug', 'browserList', 'safari',   'Safari',         '1', 'rnd'),
('en',    'bug', 'browserList', '360',      '360',            '1', 'rnd'),
('en',    'bug', 'browserList', 'qq',       'QQ',             '1', 'rnd'),
('en',    'bug', 'browserList', 'maxthon',  'Maxthon',        '1', 'rnd'),
('en',    'bug', 'browserList', 'uc',       'UC',             '1', 'rnd'),
('en',    'bug', 'browserList', 'other',    'Others',         '1', 'rnd'),
('fr',    'bug', 'browserList', 'all',      'Tous',           '1', 'rnd'),
('fr',    'bug', 'browserList', 'chrome',   'Chrome',         '1', 'rnd'),
('fr',    'bug', 'browserList', 'edge',     'Edge',           '1', 'rnd'),
('fr',    'bug', 'browserList', 'ie',       'IE series',      '1', 'rnd'),
('fr',    'bug', 'browserList', 'ie11',     'IE11',           '1', 'rnd'),
('fr',    'bug', 'browserList', 'ie10',     'IE10',           '1', 'rnd'),
('fr',    'bug', 'browserList', 'ie9',      'IE9',            '1', 'rnd'),
('fr',    'bug', 'browserList', 'ie8',      'IE8',            '1', 'rnd'),
('fr',    'bug', 'browserList', 'ie7',      'IE7',            '1', 'rnd'),
('fr',    'bug', 'browserList', 'ie6',      'IE6',            '1', 'rnd'),
('fr',    'bug', 'browserList', 'firefox',  'Firefox series', '1', 'rnd'),
('fr',    'bug', 'browserList', 'firefox4', 'Firefox4',       '1', 'rnd'),
('fr',    'bug', 'browserList', 'firefox3', 'Firefox3',       '1', 'rnd'),
('fr',    'bug', 'browserList', 'firefox2', 'Firefox2',       '1', 'rnd'),
('fr',    'bug', 'browserList', 'opera',    'Opera series',   '1', 'rnd'),
('fr',    'bug', 'browserList', 'opera11',  'Opera11',        '1', 'rnd'),
('fr',    'bug', 'browserList', 'opera10',  'Opera10',        '1', 'rnd'),
('fr',    'bug', 'browserList', 'opera9',   'Opera9',         '1', 'rnd'),
('fr',    'bug', 'browserList', 'safari',   'Safari',         '1', 'rnd'),
('fr',    'bug', 'browserList', '360',      '360',            '1', 'rnd'),
('fr',    'bug', 'browserList', 'qq',       'QQ',             '1', 'rnd'),
('fr',    'bug', 'browserList', 'maxthon',  'Maxthon',        '1', 'rnd'),
('fr',    'bug', 'browserList', 'uc',       'UC',             '1', 'rnd'),
('fr',    'bug', 'browserList', 'other',    'Autres',         '1', 'rnd'),
('de',    'bug', 'browserList', 'all',      'Alle',           '1', 'rnd'),
('de',    'bug', 'browserList', 'chrome',   'Chrome',         '1', 'rnd'),
('de',    'bug', 'browserList', 'edge',     'Edge',           '1', 'rnd'),
('de',    'bug', 'browserList', 'ie',       'IE series',      '1', 'rnd'),
('de',    'bug', 'browserList', 'ie11',     'IE11',           '1', 'rnd'),
('de',    'bug', 'browserList', 'ie10',     'IE10',           '1', 'rnd'),
('de',    'bug', 'browserList', 'ie9',      'IE9',            '1', 'rnd'),
('de',    'bug', 'browserList', 'ie8',      'IE8',            '1', 'rnd'),
('de',    'bug', 'browserList', 'ie7',      'IE7',            '1', 'rnd'),
('de',    'bug', 'browserList', 'ie6',      'IE6',            '1', 'rnd'),
('de',    'bug', 'browserList', 'firefox',  'Firefox series', '1', 'rnd'),
('de',    'bug', 'browserList', 'firefox4', 'Firefox4',       '1', 'rnd'),
('de',    'bug', 'browserList', 'firefox3', 'Firefox3',       '1', 'rnd'),
('de',    'bug', 'browserList', 'firefox2', 'Firefox2',       '1', 'rnd'),
('de',    'bug', 'browserList', 'opera',    'Opera series',   '1', 'rnd'),
('de',    'bug', 'browserList', 'opera11',  'Opera11',        '1', 'rnd'),
('de',    'bug', 'browserList', 'opera10',  'Opera10',        '1', 'rnd'),
('de',    'bug', 'browserList', 'opera9',   'Opera9',         '1', 'rnd'),
('de',    'bug', 'browserList', 'safari',   'Safari',         '1', 'rnd'),
('de',    'bug', 'browserList', '360',      '360',            '1', 'rnd'),
('de',    'bug', 'browserList', 'qq',       'QQ',             '1', 'rnd'),
('de',    'bug', 'browserList', 'maxthon',  'Maxthon',        '1', 'rnd'),
('de',    'bug', 'browserList', 'uc',       'UC',             '1', 'rnd'),
('de',    'bug', 'browserList', 'other',    'Andere',         '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'all',      '全部',           '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'windows',  'Windows',        '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'win11',    'Windows 11',     '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'win10',    'Windows 10',     '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'win8',     'Windows 8',      '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'win7',     'Windows 7',      '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'winxp',    'Windows XP',     '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'osx',      'Mac OS',         '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'android',  'Android',        '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'ios',      'IOS',            '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'linux',    'Linux',          '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'ubuntu',   'Ubuntu',         '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'chromeos', 'Chrome OS',      '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'fedora',   'Fedora',         '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'vista',    'Windows Vista',  '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'win2012',  'Windows 2012',   '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'win2008',  'Windows 2008',   '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'win2003',  'Windows 2003',   '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'win2000',  'Windows 2000',   '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'wp8',      'WP8',            '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'wp7',      'WP7',            '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'symbian',  'Symbian',        '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'freebsd',  'FreeBSD',        '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'unix',     'Unix',           '1', 'rnd'),
('zh-cn', 'bug', 'osList',      'others',   '其他',           '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'all',      '全部',           '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'windows',  'Windows',        '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'win11',    'Windows 11',     '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'win10',    'Windows 10',     '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'win8',     'Windows 8',      '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'win7',     'Windows 7',      '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'winxp',    'Windows XP',     '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'osx',      'Mac OS',         '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'android',  'Android',        '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'ios',      'IOS',            '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'linux',    'Linux',          '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'ubuntu',   'Ubuntu',         '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'chromeos', 'Chrome OS',      '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'fedora',   'Fedora',         '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'vista',    'Windows Vista',  '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'win2012',  'Windows 2012',   '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'win2008',  'Windows 2008',   '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'win2003',  'Windows 2003',   '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'win2000',  'Windows 2000',   '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'wp8',      'WP8',            '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'wp7',      'WP7',            '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'symbian',  'Symbian',        '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'freebsd',  'FreeBSD',        '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'unix',     'Unix',           '1', 'rnd'),
('zh-tw', 'bug', 'osList',      'others',   '其他',           '1', 'rnd'),
('en',    'bug', 'osList',      'all',      'All',            '1', 'rnd'),
('en',    'bug', 'osList',      'windows',  'Windows',        '1', 'rnd'),
('en',    'bug', 'osList',      'win11',    'Windows 11',     '1', 'rnd'),
('en',    'bug', 'osList',      'win10',    'Windows 10',     '1', 'rnd'),
('en',    'bug', 'osList',      'win8',     'Windows 8',      '1', 'rnd'),
('en',    'bug', 'osList',      'win7',     'Windows 7',      '1', 'rnd'),
('en',    'bug', 'osList',      'winxp',    'Windows XP',     '1', 'rnd'),
('en',    'bug', 'osList',      'osx',      'Mac OS',         '1', 'rnd'),
('en',    'bug', 'osList',      'android',  'Android',        '1', 'rnd'),
('en',    'bug', 'osList',      'ios',      'IOS',            '1', 'rnd'),
('en',    'bug', 'osList',      'linux',    'Linux',          '1', 'rnd'),
('en',    'bug', 'osList',      'ubuntu',   'Ubuntu',         '1', 'rnd'),
('en',    'bug', 'osList',      'chromeos', 'Chrome OS',      '1', 'rnd'),
('en',    'bug', 'osList',      'fedora',   'Fedora',         '1', 'rnd'),
('en',    'bug', 'osList',      'vista',    'Windows Vista',  '1', 'rnd'),
('en',    'bug', 'osList',      'win2012',  'Windows 2012',   '1', 'rnd'),
('en',    'bug', 'osList',      'win2008',  'Windows 2008',   '1', 'rnd'),
('en',    'bug', 'osList',      'win2003',  'Windows 2003',   '1', 'rnd'),
('en',    'bug', 'osList',      'win2000',  'Windows 2000',   '1', 'rnd'),
('en',    'bug', 'osList',      'wp8',      'WP8',            '1', 'rnd'),
('en',    'bug', 'osList',      'wp7',      'WP7',            '1', 'rnd'),
('en',    'bug', 'osList',      'symbian',  'Symbian',        '1', 'rnd'),
('en',    'bug', 'osList',      'freebsd',  'FreeBSD',        '1', 'rnd'),
('en',    'bug', 'osList',      'unix',     'Unix',           '1', 'rnd'),
('en',    'bug', 'osList',      'others',   'Others',         '1', 'rnd'),
('fr',    'bug', 'osList',      'all',      'Tous',           '1', 'rnd'),
('fr',    'bug', 'osList',      'windows',  'Windows',        '1', 'rnd'),
('fr',    'bug', 'osList',      'win11',    'Windows 11',     '1', 'rnd'),
('fr',    'bug', 'osList',      'win10',    'Windows 10',     '1', 'rnd'),
('fr',    'bug', 'osList',      'win8',     'Windows 8',      '1', 'rnd'),
('fr',    'bug', 'osList',      'win7',     'Windows 7',      '1', 'rnd'),
('fr',    'bug', 'osList',      'winxp',    'Windows XP',     '1', 'rnd'),
('fr',    'bug', 'osList',      'osx',      'Mac OS',         '1', 'rnd'),
('fr',    'bug', 'osList',      'android',  'Android',        '1', 'rnd'),
('fr',    'bug', 'osList',      'ios',      'IOS',            '1', 'rnd'),
('fr',    'bug', 'osList',      'linux',    'Linux',          '1', 'rnd'),
('fr',    'bug', 'osList',      'ubuntu',   'Ubuntu',         '1', 'rnd'),
('fr',    'bug', 'osList',      'chromeos', 'Chrome OS',      '1', 'rnd'),
('fr',    'bug', 'osList',      'fedora',   'Fedora',         '1', 'rnd'),
('fr',    'bug', 'osList',      'vista',    'Windows Vista',  '1', 'rnd'),
('fr',    'bug', 'osList',      'win2012',  'Windows 2012',   '1', 'rnd'),
('fr',    'bug', 'osList',      'win2008',  'Windows 2008',   '1', 'rnd'),
('fr',    'bug', 'osList',      'win2003',  'Windows 2003',   '1', 'rnd'),
('fr',    'bug', 'osList',      'win2000',  'Windows 2000',   '1', 'rnd'),
('fr',    'bug', 'osList',      'wp8',      'WP8',            '1', 'rnd'),
('fr',    'bug', 'osList',      'wp7',      'WP7',            '1', 'rnd'),
('fr',    'bug', 'osList',      'symbian',  'Symbian',        '1', 'rnd'),
('fr',    'bug', 'osList',      'freebsd',  'FreeBSD',        '1', 'rnd'),
('fr',    'bug', 'osList',      'unix',     'Unix',           '1', 'rnd'),
('fr',    'bug', 'osList',      'others',   'Autres',         '1', 'rnd'),
('de',    'bug', 'osList',      'all',      'Alle',           '1', 'rnd'),
('de',    'bug', 'osList',      'windows',  'Windows',        '1', 'rnd'),
('de',    'bug', 'osList',      'win11',    'Windows 11',     '1', 'rnd'),
('de',    'bug', 'osList',      'win10',    'Windows 10',     '1', 'rnd'),
('de',    'bug', 'osList',      'win8',     'Windows 8',      '1', 'rnd'),
('de',    'bug', 'osList',      'win7',     'Windows 7',      '1', 'rnd'),
('de',    'bug', 'osList',      'winxp',    'Windows XP',     '1', 'rnd'),
('de',    'bug', 'osList',      'osx',      'Mac OS',         '1', 'rnd'),
('de',    'bug', 'osList',      'android',  'Android',        '1', 'rnd'),
('de',    'bug', 'osList',      'ios',      'IOS',            '1', 'rnd'),
('de',    'bug', 'osList',      'linux',    'Linux',          '1', 'rnd'),
('de',    'bug', 'osList',      'ubuntu',   'Ubuntu',         '1', 'rnd'),
('de',    'bug', 'osList',      'chromeos', 'Chrome OS',      '1', 'rnd'),
('de',    'bug', 'osList',      'fedora',   'Fedora',         '1', 'rnd'),
('de',    'bug', 'osList',      'vista',    'Windows Vista',  '1', 'rnd'),
('de',    'bug', 'osList',      'win2012',  'Windows 2012',   '1', 'rnd'),
('de',    'bug', 'osList',      'win2008',  'Windows 2008',   '1', 'rnd'),
('de',    'bug', 'osList',      'win2003',  'Windows 2003',   '1', 'rnd'),
('de',    'bug', 'osList',      'win2000',  'Windows 2000',   '1', 'rnd'),
('de',    'bug', 'osList',      'wp8',      'WP8',            '1', 'rnd'),
('de',    'bug', 'osList',      'wp7',      'WP7',            '1', 'rnd'),
('de',    'bug', 'osList',      'symbian',  'Symbian',        '1', 'rnd'),
('de',    'bug', 'osList',      'freebsd',  'FreeBSD',        '1', 'rnd'),
('de',    'bug', 'osList',      'unix',     'Unix',           '1', 'rnd'),
('de',    'bug', 'osList',      'others',   'Andere',         '1', 'rnd');

UPDATE `zt_grouppriv` SET `module` = 'testcase' WHERE `module` = 'story' and `method` = 'zeroCase';
UPDATE `zt_grouppriv` SET `module` = 'product' WHERE `module` = 'story' and `method` = 'track';

ALTER TABLE `zt_job` ADD `lastSyncDate` datetime DEFAULT NULL AFTER `lastTag`;
INSERT INTO `zt_cron` (`m`, `h`, `dom`, `mon`, `dow`, `command`, `remark`, `type`, `buildin`, `status`, `lastTime`) VALUES ('*/5', '*', '*', '*', '*', 'moduleName=compile&methodName=syncCompile', '定时同步构建记录', 'zentao', 1, 'normal', '0000-00-00 00:00:00');

ALTER TABLE `zt_repofiles` ADD `oldPath` varchar(255) DEFAULT '' AFTER `path`;
