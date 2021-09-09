ALTER TABLE `zt_doclib`
    ADD COLUMN `desc` text NULL AFTER `collector`;

CREATE TABLE `zt_interfacelib_release`
(
    `id`        int UNSIGNED NOT NULL AUTO_INCREMENT,
    `doclib`    int UNSIGNED NOT NULL DEFAULT 0,
    `version`   varchar(255) NOT NULL DEFAULT '',
    `snap`      mediumtext   NOT NULL,
    `addedBy`   varchar(30)  NOT NULL DEFAULT 0,
    `addedDate` datetime     NOT NULL DEFAULT '0000-00-00 00:00:00',
    PRIMARY KEY (`id`)
)

CREATE TABLE `zt_interface`
(
    `id`           int UNSIGNED NOT NULL AUTO_INCREMENT,
    `product`      varchar(255) NOT NULL DEFAULT '',
    `lib`          int UNSIGNED NOT NULL DEFAULT 0,
    `module`       int UNSIGNED NOT NULL DEFAULT 0,
    `title`        varchar(100) NOT NULL DEFAULT '',
    `path`         varchar(255) NOT NULL DEFAULT '',
    `protocol`     varchar(10)  NOT NULL DEFAULT '',
    `method`       varchar(10)  NOT NULL DEFAULT '',
    `requestType`  varchar(100) NOT NULL DEFAULT '',
    `responseType` varchar(100) NOT NULL DEFAULT '',
    `status`       varchar(20)  NOT NULL DEFAULT '',
    `owner`        int UNSIGNED NOT NULl DEFAULT 0,
    `desc`         varchar(255) NOT NULL DEFAULT '',
    `version`      smallint UNSIGNED NOT NULL DEFAULT 0,
    `params`       text NULL,
    `commonParams` text NULL,
    `addedBy`      varchar(30)  NOT NULL DEFAULT 0,
    `addedDate`    datetime     NOT NULL DEFAULT '0000-00-00 00:00:00',
    `editEdBy`     varchar(30)  NOT NULL DEFAULT 0,
    `editedDate`   datetime     NOT NULL DEFAULT '0000-00-00 00:00:00',
    `deleted`      enum(0, 1) NOT NULL DEFAULT 0,
    PRIMARY KEY (`id`)
);

CREATE TABLE `zt_interface_spec`
(
    `id`             int UNSIGNED NOT NULL AUTO_INCREMENT,
    `doc`            int UNSIGNED NOT NULL DEFAULT 0,
    `module`         int UNSIGNED NOT NULL DEFAULT 0,
    `title`          varchar(100) NOT NULL DEFAULT '',
    `path`           varchar(255) NOT NULL DEFAULT '',
    `agreement`      enum('http','https') NOT NULL,
    `method`         varchar(10)  NOT NULL DEFAULT '',
    `requestFormat`  varchar(100) NOT NULL DEFAULT '',
    `responseFormat` varchar(100) NOT NULL DEFAULT '',
    `status`         tinyint UNSIGNED NOT NULL DEFAULT 0,
    `owner`          int UNSIGNED NOT NULl DEFAULT 0,
    `desc`           varchar(255) NOT NULL DEFAULT '',
    `version`        smallint UNSIGNED NOT NULL DEFAULT 0,
    `params`         text NULL,
    `addedBy`        varchar(30)  NOT NULL DEFAULT 0,
    `addedDate`      datetime     NOT NULL DEFAULT '0000-00-00 00:00:00',
    PRIMARY KEY (`id`)
);

create table `zt_interface_const`
(
    `id`          int UNSIGNED NOT NULL AUTO_INCREMENT,
    `doclib`      int UNSIGNED NOT NULL DEFAULT 0,
    `field`       varchar(50)   NOT NULL DEFAULT '',
    `scope`       varchar(50)   NOT NULL DEFAULT '',
    `type`        varchar(20)   NOT NULL DEFAULT '',
    `default`     varchar(1000) NOT NULL DEFAULT '',
    `required`    tinyint UNSIGNED NOT NULL DEFAULT 0,
    `desc`        varchar(255)  NOT NULL DEFAULT 0,
    `version`     smallint UNSIGNED NOT NULL DEFAULT 0,
    `addedBy`     varchar(30)   NOT NULL DEFAULT 0,
    `addedDate`   datetime      NOT NULL DEFAULT '0000-00-00 00:00:00',
    `editEdBy`    varchar(30)   NOT NULL DEFAULT 0,
    `editedDate`  datetime      NOT NULL DEFAULT '0000-00-00 00:00:00',
    `deletedDate` datetime NULL,
    PRIMARY KEY (`id`)
)

create table `zt_interface_const_spec`
(
    `id`        int UNSIGNED NOT NULL AUTO_INCREMENT,
    `doclib`    int UNSIGNED NOT NULL DEFAULT 0,
    `field`     varchar(50)   NOT NULL DEFAULT '',
    `scope`     varchar(50)   NOT NULL DEFAULT '',
    `type`      varchar(20)   NOT NULL DEFAULT '',
    `default`   varchar(1000) NOT NULL DEFAULT '',
    `required`  tinyint UNSIGNED NOT NULL DEFAULT 0,
    `desc`      varchar(255)  NOT NULL DEFAULT 0,
    `version`   smallint UNSIGNED NOT NULL DEFAULT 0,
    `addedBy`   varchar(30)   NOT NULL DEFAULT 0,
    `addedDate` datetime      NOT NULL DEFAULT '0000-00-00 00:00:00',
    PRIMARY KEY (`id`)
)
