<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-gb" xml:lang="en-gb">
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="en-gb" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta name="copyright" content="2000, 2002, 2005, 2007 phpBB Group" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>DILDANO &bull; Index page</title>

<link rel="stylesheet" href="styles/dildano/theme/stylesheet.css" type="text/css" />
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">

<script type="text/javascript">
// <![CDATA[

function popup(url, width, height, name)
{
	if (!name)
	{
		name = '_popup';
	}

	window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes,width=' + width);
	return false;
}

function jumpto()
{
	var page = prompt('Enter the page number you wish to go to:', '');
	var per_page = '';
	var base_url = '';

	if (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)
	{
		if (base_url.indexOf('?') == -1)
		{
			document.location.href = base_url + '?start=' + ((page - 1) * per_page);
		}
		else
		{
			document.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);
		}
	}
}

/**
* Find a member
*/
function find_username(url)
{
	popup(url, 760, 570, '_usersearch');
	return false;
}

/**
* Mark/unmark checklist
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
	var parent = document.getElementById(id);
	if (!parent)
	{
		eval('parent = document.' + id);
	}

	if (!parent)
	{
		return;
	}

	var rb = parent.getElementsByTagName('input');
	
	for (var r = 0; r < rb.length; r++)
	{
		if (rb[r].name.substr(0, name.length) == name)
		{
			rb[r].checked = state;
		}
	}
}


// ]]>
</script>
</head>
<body class="ltr">

<a name="top"></a>

<div id="wrapheader">

	<div id="logodesc">
		<table width="100%" cellspacing="0">
		<tr>
			<td><a href="index.php"><img src="styles/dildano/imageset/site_logo.gif" width="170" height="94" alt="" title="" /></a></td>
			<td width="100%" align="center"><h1>DILDANO</h1><span class="gen">it's the new dildano forum</span></td>
		</tr>
		</table>
	</div>

	<div id="menubar">
		<table width="100%" cellspacing="0">
		<tr>
			<td class="genmed">
				<a href="ucp-46864.php"><img src="styles/dildano/theme/images/icon_mini_login.gif" width="12" height="13" alt="*" /> Login</a>&nbsp; &nbsp;<a href="ucp-42004.php"><img src="styles/dildano/theme/images/icon_mini_register.gif" width="12" height="13" alt="*" /> Register</a>
								</td>
			<td class="genmed" align="right">
				<a href="faq.php"><img src="styles/dildano/theme/images/icon_mini_faq.gif" width="12" height="13" alt="*" /> FAQ</a>
				&nbsp; &nbsp;<a href="search.php"><img src="styles/dildano/theme/images/icon_mini_search.gif" width="12" height="13" alt="*" /> Search</a>			</td>
		</tr>
		</table>
	</div>

	<div id="datebar">
		<table width="100%" cellspacing="0">
		<tr>
			<td class="gensmall"></td>
			<td class="gensmall" align="right">It is currently Wed Jul 21, 2010 5:15 pm<br /></td>
		</tr>
		</table>
	</div>

</div>

<div id="wrapcentre">

		<p class="searchbar">
		<span style="float: left;"><a href="search-56377.php">View unanswered posts</a> | <a href="search-2386.php">View active topics</a></span>
			</p>
	
	<br style="clear: both;" />

	<table class="tablebg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tr>
		<td class="row1">
			<p class="breadcrumbs"><a href="index.php">Board index</a></p>
			<p class="datetime">All times are UTC [ <abbr title="Daylight Saving Time">DST</abbr> ]</p>
		</td>
	</tr>
	</table>
	<br /><table class="tablebg" cellspacing="1" width="100%">
<tr>
	<td class="cat" colspan="5" align="right">&nbsp;</td>
</tr>
<tr>
	<th colspan="2">&nbsp;Forum&nbsp;</th>
	<th width="50">&nbsp;Topics&nbsp;</th>
	<th width="50">&nbsp;Posts&nbsp;</th>
	<th>&nbsp;Last post&nbsp;</th>
</tr>
		<tr>
			<td class="row1" width="50" align="center"><img src="styles/dildano/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="viewforum-23602.php">Dildano</a>
				<p class="forumdesc">the obscure musical act 'Dildano' can be discussed here.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">14</p></td>
			<td class="row2" align="center"><p class="topicdetails">67</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Wed Jun 30, 2010 1:39 pm</p>
					<p class="topicdetails"><a href="memberlist-38879.php">huangdong08</a>						<a href="viewtopic-31884.php#p305"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="styles/dildano/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="viewforum-11477.php">Other</a>
				<p class="forumdesc">all other aspects of human experience can be discussed here.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">22</p></td>
			<td class="row2" align="center"><p class="topicdetails">202</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Wed Jun 30, 2010 1:39 pm</p>
					<p class="topicdetails"><a href="memberlist-38879.php">huangdong08</a>						<a href="viewtopic-17802.php#p307"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
							</td>
		</tr>
	</table><span class="gensmall"><a href="ucp-43012.php">Delete all board cookies</a> | <a href="memberlist-14228.php">The team</a></span><br />

<br clear="all" />

<table class="tablebg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tr>
		<td class="row1">
			<p class="breadcrumbs"><a href="index.php">Board index</a></p>
			<p class="datetime">All times are UTC [ <abbr title="Daylight Saving Time">DST</abbr> ]</p>
		</td>
	</tr>
	</table>
<br clear="all" />



	<br clear="all" />

	<form method="post" action="./ucp.php?mode=login">

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat"><h4><a href="ucp-46864.php">Login</a></h4></td>
	</tr>
	<tr>
		<td class="row1" align="center"><span class="genmed">Username:</span> <input class="post" type="text" name="username" size="10" />&nbsp; <span class="genmed">Password:</span> <input class="post" type="password" name="password" size="10" />&nbsp;  <span class="gensmall">Log me on automatically each visit</span> <input type="checkbox" class="radio" name="autologin" />&nbsp; <input type="submit" class="btnmain" name="login" value="Login" /></td>
	</tr>
	</table>
		</form>

<br clear="all" />

<table class="legend">
<tr>
	<td width="20" align="center"><img src="styles/dildano/imageset/forum_unread.gif" width="46" height="25" alt="New posts" title="New posts" /></td>
	<td><span class="gensmall">New posts</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="styles/dildano/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td><span class="gensmall">No new posts</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="styles/dildano/imageset/forum_read_locked.gif" width="46" height="25" alt="No new posts [ Locked ]" title="No new posts [ Locked ]" /></td>
	<td><span class="gensmall">Forum locked</span></td>
</tr>
</table>

<img src="cron-36441.php" width="1" height="1" alt="cron" /></div>

<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain
	the full copyright we ask you at least leave in place the "Powered by phpBB" line, with
	"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our
	forums may be affected.

	The phpBB Group : 2006
//-->

<div id="wrapfooter">
		<span class="copyright">Powered by <a href="http://www.phpbb.com/">phpBB</a> &copy; 2000, 2002, 2005, 2007 phpBB Group
	</span>
</div>

</body>
</html>
<!-- Localized -->