<?php
/**
 * PHP Server Monitor
 * Monitor your servers and websites.
 *
 * This file is part of PHP Server Monitor.
 * PHP Server Monitor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PHP Server Monitor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHP Server Monitor.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     phpservermon
 * @author      manhere <https://github.com/manhere>
 * @copyright   Copyright (c) 2008-2014 Pepijn Over <pep@neanderthal-technology.com>
 * @license     http://www.gnu.org/licenses/gpl.txt GNU GPL v3
 * @version     Release: @package_version@
 * @link        http://www.phpservermonitor.org/
 **/

$sm_lang = array(
	'name' => '中文 - Chinese',
	'locale' => array('zh_CN.UTF-8', 'zh_CN', 'chinese', 'chinese-cn'),
	'system' => array(
		'title' => 'Server Monitor',
		'install' => '安装',
		'action' => '操作',
		'save' => '保存',
		'edit' => '编辑',
		'delete' => '删除',
		'date' => '日期',
		'message' => '消息',
		'yes' => '是',
		'no' => '否o',
		'edit' => '编辑',
		'insert' => '插入',
		'add_new' => '添加',
		'update_available' => '发现新版本({version}) <a href="http://www.phpservermonitor.org" target="_blank">http://www.phpservermonitor.org</a>.',
		'back_to_top' => '返回顶部',
		'go_back' => '后退',
		'ok' => 'OK',
		'cancel' => 'Cancel',
		// date/time format according the strftime php function format parameter http://php.net/manual/function.strftime.php
		'short_day_format' => '%B %e',
		'long_day_format' => '%B %e, %Y',
		'yesterday_format' => '昨日 %k:%M',
		'other_day_format' => '%A %k:%M',
		'never' => '从未',
		'hours_ago' => '%d 小时前',
		'an_hour_ago' => '1小时前',
		'minutes_ago' => '%d 分钟前',
		'a_minute_ago' => '1分钟前',
		'seconds_ago' => '%d 秒前',
		'a_second_ago' => '刚刚',
	),
	'menu' => array(
		'config' => '设置',
		'server' => '服务器',
		'server_log' => '日志',
		'server_status' => '状态',
		'server_update' => '更新',
		'user' => '用户',
		'help' => '帮助',
	),
	'users' => array(
		'user' => '用户',
		'name' => '名称',
		'user_name' => '用户名',
		'password' => '密码',
		'password_repeat' => '重复密码',
		'password_leave_blank' => '留空为不修改',
		'level' => '等级',
		'level_10' => '超级管理员',
		'level_20' => '普通用户',
		'level_description' => '<b>超级管理员</b> 拥有所有权限: 管理服务器, 用户 以及修改设置.<br/><b>普通用户</b> 只能查看及更新自己名下所属的服务器.',
		'mobile' => '手机',
		'email' => '邮件',
		'delete_title' => 'Delete User',
		'delete_message' => 'Are you sure you want to delete user \'%1\'?',
		'deleted' => 'User deleted.',
		'updated' => '用户已更新.',
		'inserted' => '用户已添加.',
		'profile' => '个人资料',
		'profile_updated' => '个人资料已更新.',
		'error_user_name_bad_length' => '用户名长度必须为2-64个字符.',
		'error_user_name_invalid' => '用户名只允许使用字母 (a-z, A-Z), 数字 (0-9) 及下划线 (_).',
		'error_user_name_exists' => '该用户名已存在.',
		'error_user_email_bad_length' => '电子邮箱长度必须为5-255个字符.',
		'error_user_email_invalid' => '无效的邮箱地址.',
		'error_user_level_invalid' => '该用户等级无效.',
		'error_user_no_match' => '该用户名不存在.',
		'error_user_password_invalid' => '密码无效.',
		'error_user_password_no_match' => '密码不符.',
	),
	'log' => array(
		'title' => '日志概览',
		'type' => '类型',
		'status' => '状态',
		'email' => '邮件',
		'sms' => '短信',
	),
	'servers' => array(
		'server' => '服务器',
		'status' => '状态',
		'label' => '标签',
		'domain' => '域名/IP',
		'port' => '端口',
		'type' => '类型',
		'type_website' => '网站',
		'type_service' => '服务',
		'pattern' => '字符串/正则匹配',
		'pattern_description' => '如果在网站上未找到对应匹配内容, 则标记该网站为离线. 支持正则表达式.',
		'last_check' => '最后检查',
		'last_online' => '最后在线',
		'monitoring' => '监控中',
		'no_monitoring' => 'No monitoring',
		'email' => '邮件',
		'send_email' => '发送邮件',
		'sms' => '短信',
		'send_sms' => '发送短信',
		'delete_title' => 'Delete Server',
		'delete_message' => 'Are you sure you want to delete server \'%1\'?',
		'deleted' => 'Server deleted.',
		'updated' => '服务器已更新.',
		'inserted' => '服务器已添加.',
		'latency' => '延迟',
		'latency_max' => '延迟(最大)',
		'latency_min' => '延迟(最小)',
		'latency_avg' => '延迟(平均)',
		'uptime' => 'Uptime',
		'year' => '年',
		'month' => '月',
		'week' => '周',
		'day' => '日',
		'hour' => '小时',
		'warning_threshold' => '报警阈值',
		'warning_threshold_description' => '失败达到多少次数则标记为离线.',
		'chart_last_week' => '上周',
		'chart_history' => '更早',
		// Charts date format according jqPlot date format  http://www.jqplot.com/docs/files/plugins/jqplot-dateAxisRenderer-js.html
		'chart_day_format' => '%Y-%m-%d',
		'chart_long_date_format' => '%Y-%m-%d %H:%M:%S',
		'chart_short_date_format' => '%m/%d %H:%M',
		'chart_short_time_format' => '%H:%M',
	),
	'config' => array(
		'general' => '通用',
		'language' => '语言',
		'show_update' => '每周检查更新?',
		'email_status' => '允许发送邮件?',
		'email_from_email' => '发件人地址',
		'email_from_name' => '发件人名称',
		'email_smtp' => '使用SMTP发送',
		'email_smtp_host' => 'SMTP主机',
		'email_smtp_port' => 'SMTP端口',
		'email_smtp_username' => 'SMTP用户名',
		'email_smtp_password' => 'SMTP密码',
		'email_smtp_noauth' => '留空为无验证',
		'sms_status' => '允许发送短信SMS?',
		'sms_gateway' => '短信SMS发送网关',
		'sms_gateway_mosms' => 'Mosms',
		'sms_gateway_mollie' => 'Mollie',
		'sms_gateway_spryng' => 'Spryng',
		'sms_gateway_inetworx' => 'Inetworx',
		'sms_gateway_clickatell' => 'Clickatell',
        'sms_gateway_textmarketer' => 'Textmarketer',
		'sms_gateway_username' => 'SMS网关用户名',
		'sms_gateway_password' => 'SMS网关密码',
		'sms_from' => '发信人电话号',
		'alert_type' => '如果想要收到提醒请选中此项.<br/>',
        'alert_type_description' => '<b>状态变化:</b> '.
		    '服务器 online -> offline 或 offline -> online 的状态变化将会收到提醒.<br/>'.
		    '<br /><b>离线状态:</b> '.
		    '服务器首次发生离线状态将会收到提醒 ，如：'.
		    'cronjob 设定为15分钟执行一次， 服务器从1:00-6:00一直处于当状态'.
		    '那么你将于1:00首次发现脱机时收到一条提醒，之后不会重复提醒.<br/>'.
		    '<br><b>总是提醒:</b> '.
		    '每次脚本执行或站点离线(即使站点离线很久已提醒过)均发送提醒.',
		'alert_type_status' => '状态变化',
		'alert_type_offline' => '离线状态',
		'alert_type_always' => '总是提醒',
		'log_status' => '状态记录',
		'log_status_description' => '如果状态记录设置为开, 提醒发送时均会保存记录.',
		'log_email' => '记录脚本所发邮件?',
		'log_sms' => '记录脚本所发短信SMS?',
		'updated' => '设置已更新.',
		'tab_email' => '邮件发送设置',
		'tab_sms' => '短信发送设置',
		'tab_log' => '日志设置',
		'settings_email' => '邮件发送设置',
		'settings_sms' => '短信发送设置',
		'settings_notification' => '提醒设置',
		'settings_log' => '日志设置',
		'auto_refresh' => 'Auto-refresh',
		'auto_refresh_servers' =>
			'自动刷新服务器页.<br/>'.
			'<span class="small">'.
			'单位为秒, 设置为0则不自动刷新.'.
			'</span>',
		'seconds' => 'seconds',
	),
	// for newlines in the email messages use <br/>
	'notifications' => array(
		'off_sms' => '服务器 \'%LABEL%\' 宕机: ip=%IP%, port=%PORT%. Error=%ERROR%',
		'off_email_subject' => 'IMPORTANT: 服务器 \'%LABEL%\' 宕机',
		'off_email_body' => "无法连接到以下服务器:<br/><br/>服务器: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>错误: %ERROR%<br/>日期: %DATE%",
		'on_sms' => '服务器 \'%LABEL%\' 运行中: ip=%IP%, port=%PORT%',
		'on_email_subject' => 'IMPORTANT: 服务器 \'%LABEL%\' 运行中',
		'on_email_body' => "服务器 '%LABEL%' 恢复运行:<br/><br/>服务器: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>日期: %DATE%",
	),
	'login' => array(
		'welcome_usermenu' => '欢迎, %user_name%',
		'title_sign_in' => '请登录',
		'title_forgot' => '忘记密码?',
		'title_reset' => '重设密码',
		'submit' => '提交',
		'remember_me' => '记住我',
		'login' => '登录',
		'logout' => '注销',
		'username' => '用户名',
		'password' => '密码',
		'password_repeat' => '重复密码',
		'password_forgot' => '忘记密码?',
		'password_reset' => '重设密码',
		'password_reset_email_subject' => '重设你的密码',
		'password_reset_email_body' => '点击以下链接重设密码. 链接1小时内有效.<br/><br/>%link%',
		'error_user_incorrect' => '该用户不存在.',
		'error_login_incorrect' => '登录信息不正确.',
		'error_login_passwords_nomatch' => '密码不符.',
		'error_reset_invalid_link' => '重设密码链接无效.',
		'success_password_forgot' => '密码重设邮件已发送.',
		'success_password_reset' => '密码重设成功.请登录.',
	),
);