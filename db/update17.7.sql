ALTER TABLE `zt_chart` ADD `group` mediumint(8) unsigned NOT NULL default '0' AFTER `type`;
ALTER TABLE `zt_chart` MODIFY COLUMN `desc` text NOT NULL;
ALTER TABLE `zt_chart` ADD `editedBy` varchar(30) NOT NULL AFTER `createdDate`;
ALTER TABLE `zt_chart` ADD `editedDate` datetime NOT NULL AFTER `editedBy`;

INSERT INTO `zt_module` (`root`, `branch`, `name`, `parent`, `path`, `grade`, `order`, `type`, `owner`, `collector`, `short`, `deleted`) VALUES
(0, 0, '产品', 0, ',0,', 1, 10, 'chart', 'system', '', '', '0'),
(0, 0, '项目', 0, ',0,', 1, 20, 'chart', 'system', '', '', '0'),
(0, 0, '测试', 0, ',0,', 1, 30, 'chart', 'system', '', '', '0'),
(0, 0, '组织', 0, ',0,', 1, 40, 'chart', 'system', '', '', '0');

UPDATE `zt_chart` SET `group` = (SELECT `id` FROM `zt_module` WHERE `type` = 'bi' AND `name` = '产品' limit 1);
UPDATE `zt_module` SET `path` = CONCAT(',', `id`, ',') WHERE `type` = 'bi' AND `name` in ('产品', '项目', '测试', '组织');

CREATE TABLE IF NOT EXISTS `zt_dimension` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `code` varchar(45) NOT NULL,
  `desc` text NOT NULL,
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL default '0',
  PRIMARY KEY (`id`),
  KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
