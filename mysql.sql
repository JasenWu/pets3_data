-- 创建 unit 章节表
CREATE TABLE IF NOT EXISTS `unit`(
   `id` INT UNSIGNED AUTO_INCREMENT,
   `order` INT,
   `title` VARCHAR(60) NOT NULL,
   `remark` VARCHAR(240) NULL,
   PRIMARY KEY ( `id` )
)


INSERT INTO `unit`(`id`, `order`, `title`, `remark`) VALUES (null,1,'Greeting and Introduction','') 

-- 创建 chapter 对话表
CREATE TABLE IF NOT EXISTS `chapter`(
   `id` INT UNSIGNED AUTO_INCREMENT COMMENT '主键自增',
   `unit_id` INT COMMENT '章节Id关联',
   `order` INT  COMMENT '章节顺序',
   `title` VARCHAR(60) NOT NULL  COMMENT '章节标题',
   `remark` VARCHAR(240) NULL  COMMENT '章节备注信息',
   PRIMARY KEY ( `id` )
)


-- 创建 roles 角色表
CREATE TABLE IF NOT EXISTS `roles`(
   `id` INT UNSIGNED AUTO_INCREMENT  COMMENT '主键自增',
   `unit_id` INT  COMMENT '章节Id关联',
   `chapterId` INT  COMMENT '章节对话ID关联',
   `name` VARCHAR(10) NOT NULL  COMMENT '角色名称',
   `sex` INT  COMMENT '1：男 0：女',
   `type` INT COMMENT '0：旁白 1：主角 2：配角',
   `remark` VARCHAR(240) NULL COMMENT '备注信息',
   PRIMARY KEY ( `id` )
)


-- 创建 对话内容 角色表
CREATE TABLE IF NOT EXISTS `content`(
   `id` INT UNSIGNED AUTO_INCREMENT COMMENT '主键自增',
   `unit_id` INT  COMMENT '章节Id关联',
   `chapterId` INT  COMMENT '章节对话ID关联',
   `roleId` INT  COMMENT '角色ID关联',
   `content_en` TEXT NOT NULL  COMMENT '英文内容',
   `content_zh` TEXT  NULL  COMMENT '中文内容',
   `remark` VARCHAR(240) NULL  COMMENT '备注信息',
     PRIMARY KEY ( `id` )
)