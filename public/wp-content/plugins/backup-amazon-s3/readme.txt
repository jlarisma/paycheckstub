=== Backup & Restore Amazon S3 ===
Plugin Name: Backup & Restore Amazon S3
Version: 1.0.6
Donate link: http://www.wpadm.com/donate
URI: http://www.wpadm.com/
Tags: Amazon, Amazon S3, backet, baket, backup, Amazon S3 backup, database, file, full backup, manage, sicherung, database backup, file backup, page backup, page, web, web backup, website, website backup, site, site backup, back up, cloud, Cloud Files, cloud backup, db backup, dump, migrate, multisite, storage, time, upload, data bank, zip, archive, backups, db, aws, wpadm, web services, amazon web services
Requires at least: 3.9
Tested up to: 4.4.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Author: WPAdm.com
Contributors: WPAdm.com

Amazon S3 Backup & Restore Plugin to create Amazon S3 Full Backup (Files + Database) or Restore, Duplicate, Clone or Migrate of your Website

== Description ==

Backup and Restore WordPress to/from Local Storage or upload/download Backups to/from Amazon S3 backet (Amazon S3 Web Services - AWS).

* FREE Amazon S3 Backup and Restore plugin with additional paid services;
* Local Backup: create the Full Backup of Web Page (Files + Database) and store this at Local Storage of the Site;
* Amazon S3 Backup and Restore (restoration) to / from backet: create the Full Backup (Files + Database) of Website at Local Storage and upload this to Amazon S3 backet;
* Backup and Recovery of BIG files is also supported;
* You can manage more than one domain, using free account at www.wpadm.com

If you need help with the plugin or you want to report a bug please refer to http://www.wpadm.com/support/

== Installation ==
Two way to install the Amazon S3 backup and restore (restoration) plugin:<br />
1. Automatically installation - Intall due WordPress;
Go to menu "Plugins" -> "Add new."
Search for "backup" or "Amazon S3" or "Amazon S3 backup" and install it, by clicking on "Install" button;<br /><br />

2. Manually installation:<br />
Upload the plugin folder 'Amazon S3 Backup' to the '/wp-content/plugins/' directory of your WordPress installation.
Activate the plugin through the 'Plugins' menu in WordPress



Amazon S3 Backup Plugin have a settings section on WordPress plugin page.
If you need help with the plugin or you want to report a bug, please refer to http://www.wpadm.com/support/

== Frequently Asked Questions ==

= My Backup wasn't created. What should I do? =
If Amazon s3 Backup wasn't created you should send to us the message about this problem and some specific information consider this backup. After the backup process was completed (or not completed) you've seen a messages about their results. We need this messages with all of log messages of your server to analyse the problem properly.<br />

= What kind of files are supported by this backup plugin? =
Amazon S3 Backup and Restore plugin support all of file types.


== Other ==

Usefull additional functions can be found at www.wpadm.com in the User profile.
Amazon S3 Backup is a new plugin, so we tried to provide a bug-free plugin/widget.

Information about privacy: AFTER the user has been registered at WPAdm service AND has confirmed their registration,
our plugin will get the minimum requirements of php and mysql configuration, version and language of WordPress.
This data will be send to WPAdm service, to get the plugin work correctly, to extend supported configurations of user sites with WPAdm-extensions and support.
WE DO NOT COLLECT AND DO NOT STORE THE PERSONAL DATA OF USERS FROM THIS PLUGIN!<br />

= Why does WPAdm use Amazon S3? =
The Amazon S3 cloud service was thoroughly analysed for backup cost-efficiency, performance and stability. The main aspects of the evaluation were data safety, availability, restoration performance and financial issues. The financial evaluations included such parameters as:<br />
* Cost-efficiency of the increased backup performance. It was crucial for the company not to expand general backup expenditures even more while making backup process less time-consuming and more reliable. The investigation showed that restoring from cloud storage requires far less time and effort than tape-based solutions. Recovery process was at least twice faster than from tape and in case of multiple requests or minor hardware/software issues the difference soared up to twelve times. According to WPADM requirements any new recovery solution should provide an advantage in performance while diminishing the expenditures. For example, storing data on the company's own hard-drive storage would increase the performance but would be more expensive, while Amazon S3 proved to enhance both parameters.<br />
* The backup data should be available at any time while data archive should be stable. According to the developers specifications S3 service guarantees up to 99.99% durability and 99.99% availability within a given year. These figures are incomparable with similar parameters of tape-based systems.<br />
* Easy implementation. Oracle database analysts tested Amazon S3 for compatibility with their backups and concluded that this cloud storage service works fine with multi-platform Oracle Recovery Manager.<br />
* Exceptional informations safety. S3 service was designed to comply with the highest standards of physical safety, security accreditations and protocols. With the help of reliable encryption protocols it is able to protect both the streaming data and the information stored at data centers.<br />


= Backup process: not so simple? =
To create a proper backup you'll have to do more than just duplicate your essential data. Recovery solutions may help you to survive a catastrophe. The critical point for a successful backup and  recovery is not a number of copies, it is the storage where you keep them. If the need arises you should be able to access you backup files as soon as possible. Also it is useful to schedule the process carefully with wpadm.com plugin.<br />
So, as I have already mentioned and will never be tired of saying – mind where your files are. The best thing one can do is to make sure that your backups are in different datacenters in different regions. Disasters happen like this: you upload a copy of the backup to your AWS cloud while the other one is stored at Dropbox; now, if a massive metropolitan area power failure or a local disaster happens all your data is lost without a tiny chance of emergency recovery because the both copies happened to be in the same datacenter. There is also an issue of upgrades. Sometimes when hosting companies decide put a software upgrade on schedule it results in a cascade of failures which completely eliminates their datacenter presence in the region. The point is, distribute your data copies to various datacenters all over the country or by such huge companies how Amazon or Dropbox.<br />
I hope you understand that datacenters are not 100% fail-safe. The majority of them (not only the small ones) lack backup energy for more than a several hours period, while 12-24 hour power outages are not so rare. Some of the datacenters have just enough backup juice to switch off the servers properly without any power-spike damage.<br />
Suppose your internet connection the very moment you have an urgent need to recover your system. The first thought you have will be: "Why haven't I saved my backup on a USB flash drive, CD or a memory stick?" While some data storage media is fragile or may be damaged by an electrostatic discharge, keeping files off the Internet and disconnected from a computer guarantees absence of viruses or malware in your recovery software.

= Worst possible recovery option =
It is hard to believe but some webmasters actually schedule their recovery systems to create site backups in their public web directories! By obvious reasons even complete absence of the copy would be more preferable. One must not necessarily be an exceptional hacker to exploit a publicly accessible file. And the backups are exploitable as they often contain outdated applications or unpatched code with known vulnerabilities.<br />
It is easy to get rid of this danger – make sure that all your site software is upgraded to latest versions and patched. Even the most sophisticated web firewall (even with virtual patching) doesn't guarantee absolute security. And of course do not keep your backups or recovery files in publicly-accessible locations! 

= Creating recovery backup for Websites =
Sometimes it is better to have no backups than to possess a wrong one. So, how to create a good backup? There are four criteria which ensure that your backup will be safe, easily accessible to you (not the hackers) and able to survive any power outage or hardware failure.<br /> 
Here they are:<br />

= That's where you keep backup of website =
It is clear by now that your backup should not be located in your website's public directory. Neither should it be kept on your website server. They are easily affected by viral attacks and hard disk failures. Any person who has gained an access to your web space is potentially able to destroy or infect the backups and crash the whole site. So, keep your as far from your site as you can.
The market of fast and easy backup and recovery solutions is vast. You can always use one of the numerous online backup services, cloud spaces or computer programs. Some of them can even schedule the alleged procedures. Moreover, there is a bunch of WordPress plugins working in combination with cloud storage services like Dropbox or Amazon.

= Schedule your automatic backup =
People tend to fail, automatics doesn't. Even a most professional webmaster may forget to put the backup on schedule especially when the website is okay and runs perfectly. When everything works as it should it makes people lazy. The best option is to make all your backups fully automatic via backup scheduler services. Automatic backup process ensures that the copies will be created on time. Although if you prefer manual solutions schedule your procedures carefully and do not miss the chosen time.<br />
We live in a dangerous world full of malware which is able to destroy data altogether or write over essential files. Even if everything seems to run smoothly one moment you may find yourself in a situation when you cannot recover your files without a previously created backup.

= There is no such thing as too many copies =
Computing firms declare that if there is less than two copies of the information – it does not exist. It should be understood as follows: make as many copies of your backups and recovery files as possible, redundancy and schedule it. It is the key to safety. It may sound a bit paranoid but you have to be absolutely sure you can access the data in case of emergency.<br />
By the way, you can always adjust your software to create multiple copies of your files automatically on schedule.

= Check if everything works properly =
You can't be sure that your backup and recovery system works properly unless you test it. Use with wpadm.com restore button your domain to check if you can restore your website from scratch using only your backups and recovery solutions. Fail to do this and the day the site goes offline you may find yourself with a heap of backups that don't even work. Such a mess will obviously put all your work far behind schedule.

= Learn from mistakes of others =
Some of the things I mentioned are learned from my own poor experience others – from somebody else's mistakes while you are able to get this vital information simply by reading. Don't miss the chance and remember that a successful backup process should be: automated, redundant, off-site and thoroughly tested. Schedule them carefully an you won't regret it!



== Changelog ==

Please, try to update Amazon S3 Full Backup to the latest version to avoid security and other problems.

Thank you. 

**Revision** &nbsp;&nbsp;&nbsp;&nbsp; / &nbsp;&nbsp;&nbsp;&nbsp; **Description**

@1310303&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup bug fix(auth user)
@1310095&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup Using of Amazon S3.
@1307459&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup Carriage returns in other description of plugin Amazon S3 backup.
@1306346&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup tested by 4.4
@1301114&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup Grammar corrected, tags added in Amazon Web Services backup and …
@1296424&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup Description for Amazon S3 Full backup plugin changed.
@1292557&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup fixed class main - const
@1292511&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup Backup and restoration near description. 
@1282699&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup add new version 1.0.2
@1271816&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup added index files
@1271150&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup returned function
@1269423&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup remove files of logs
@1267842&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup Trying to update this Amazon S3 Full backup plugin
@1267841&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup syntax corrected
@1267834&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup Contributors added
@1261874&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup image loading form
@1260378&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup added styles for mobile devices
@1258755&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup some changes in text of amazon backup plugin
@1257735&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup update styles (button)
@1255845&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup update styles (form)
@1251843&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup Amazon S3 FAQ question added
@1250434&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup update styles (button)
@1248567&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup css button
@1247554&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup update style(button-send)
@1244740&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup syntax
@1242731&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup license edit description
@1241573&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup update styles (button)
@1238644&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup last commit was not successful
@1238640&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup description changed + syntax
@1236771&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup Installation instructions
@1236768&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup description changed. A big files support.
@1235314&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup faq answer
@1234613&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup faq question
@1233122&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup update styles
@1230205&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup update styles (button)
@1229206&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup update style(button-send)
@1227614&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup tested version 4.3
@1227205&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup styles mobile devices(form)
@1223658&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup styles mobile devices
@1222755&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup update styles
@1220858&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup update js
@1219938&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup update styles (button)
@1217155&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup readme changed
@1214953&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup update styles
@1213441&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup change log changed
@1210311&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup update styles
@1207852&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup description changed
@1207821&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup added Recovery
@1207030&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup syntax
@1205960&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup version 1.0.0
@1205901&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amazon S3 Full Backup was added

== Upgrade Notice ==


Please, try to update Amazon S3 Full Backup to the latest version to avoid security and other problems.

Thank you. 

== Screenshots ==

Screenshots coming here
