/*
MySQL Data Transfer
Source Host: localhost
Source Database: 3g
Target Host: localhost
Target Database: 3g
Date: 10/8/2008 12:05:52 AM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for active_guests
-- ----------------------------
CREATE TABLE `active_guests` (
  `ip` varchar(15) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for active_users
-- ----------------------------
CREATE TABLE `active_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for banned_users
-- ----------------------------
CREATE TABLE `banned_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for users
-- ----------------------------
CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) default NULL,
  `userid` varchar(32) default NULL,
  `userlevel` tinyint(1) unsigned NOT NULL,
  `email` varchar(50) default NULL,
  `timestamp` int(11) unsigned NOT NULL,
  `parent_directory` varchar(30) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `active_users` VALUES ('master1agent2', '1223395479');
INSERT INTO `users` VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3', '0361ff977498f2e522260477fdf61f2d', '9', 'arman@3g.com', '1223392229', 'admin');
INSERT INTO `users` VALUES ('master1', 'd5802d05bbf0881de2fd823c9560619e', '96aa24b6d80163cde5e06afd56560907', '8', 'master1@3g.com', '1223394759', 'admin');
INSERT INTO `users` VALUES ('master1agent1', '83a87fd756ab57199c0bb6d5e11168cb', '726226d035b310bcc4e3b260d6ecd5e1', '1', 'master1agent1@3g.com', '1223395385', 'master1');
INSERT INTO `users` VALUES ('master1agent1member1', '83a87fd756ab57199c0bb6d5e11168cb', '4225cc4e55da0196a7c84a1810b45748', '2', 'master1agent1member1@3g.com', '1223395319', 'master1agent1');
INSERT INTO `users` VALUES ('master1agent2', 'b1a4a6b01cc297d4677c4ca6656e14d7', 'c73446d1f91c4dc8d0e527202a1f3e7e', '1', 'master1agent2@3g.com', '1223395479', 'master1');
INSERT INTO `users` VALUES ('master1agent2member1', 'c7764cfed23c5ca3bb393308a0da2306', '0', '2', 'master1agent2member1@3g.com', '1223395477', 'master1agent2');
INSERT INTO `users` VALUES ('master2', '5b9de42bf3fa2534e0d7ae695b12aeab', 'd33d6eab248fb2d160f1cecd905a1809', '8', 'master2@3g.com', '1223395358', 'admin');
INSERT INTO `users` VALUES ('master2agent1', '83a87fd756ab57199c0bb6d5e11168cb', '695489db84c39d7eb71ab7fcdf889490', '1', 'master2agent1@3g.com', '1223394946', 'master2');
INSERT INTO `users` VALUES ('master2agent1member1', 'c7764cfed23c5ca3bb393308a0da2306', 'c40ac57540370897eab305fca804fc2c', '2', 'master2agent1member1@3g.com', '1223395328', 'master2agent1');
INSERT INTO `users` VALUES ('master2agent2', 'b1a4a6b01cc297d4677c4ca6656e14d7', '4632fb111729f5e1a363b715702030a6', '1', 'master2agent2@3g.com', '1223395017', 'master2');
