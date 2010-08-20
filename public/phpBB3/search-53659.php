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
<title>DILDANO &bull; View unanswered posts</title>

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
	var page = prompt('Enter the page number you wish to go to:', '1');
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
	<br />
<form method="post" action="./search.php?st=0&amp;sk=t&amp;sd=d&amp;sr=topics&amp;search_id=unanswered">

<table width="100%" cellspacing="1">
<tr>
	<td colspan="2"><span class="titles">View unanswered posts</span><br /></td>
</tr>
<tr>
	<td class="genmed"></td>
	<td align="right"></td>
</tr>
</table>

<br clear="all" />


	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<th width="4%" nowrap="nowrap">&nbsp;</th>
		<th colspan="2" nowrap="nowrap">&nbsp;Topics&nbsp;</th>
		<th nowrap="nowrap">&nbsp;Author&nbsp;</th>
		<th nowrap="nowrap">&nbsp;Replies&nbsp;</th>
		<th nowrap="nowrap">&nbsp;Views&nbsp;</th>
		<th nowrap="nowrap">&nbsp;Last post&nbsp;</th>
	</tr>
			<tr valign="middle">
			<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="25" align="center">
						</td>
			<td class="row1">
								 <a href="viewtopic-18891.php" class="topictitle">Wacky Time Rangers</a>
									<p class="gensmall">in <a href="viewforum-23602.php">Dildano</a></p>
							</td>
			<td class="row2" width="100" align="center"><p class="topicauthor"><a href="memberlist-41240.php">Nick</a></p></td>
			<td class="row1" width="50" align="center"><p class="topicdetails">0</p></td>
			<td class="row2" width="50" align="center"><p class="topicdetails">57</p></td>
			<td class="row1" width="120" align="center">
				<p class="topicdetails">Thu May 06, 2010 1:57 pm</p>
				<p class="topicdetails"><a href="memberlist-41240.php">Nick</a>					<a href="viewtopic-28462.php#p290"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
				</p>
			</td>
		</tr>
			<tr valign="middle">
			<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="25" align="center">
						</td>
			<td class="row1">
								 <a href="viewtopic-60371.php" class="topictitle">FZ1 sampler - how's it going?</a>
									<p class="gensmall">in <a href="viewforum-23602.php">Dildano</a></p>
							</td>
			<td class="row2" width="100" align="center"><p class="topicauthor"><a href="memberlist-1444.php">crispyjay</a></p></td>
			<td class="row1" width="50" align="center"><p class="topicdetails">0</p></td>
			<td class="row2" width="50" align="center"><p class="topicdetails">100</p></td>
			<td class="row1" width="120" align="center">
				<p class="topicdetails">Mon Mar 22, 2010 2:28 pm</p>
				<p class="topicdetails"><a href="memberlist-1444.php">crispyjay</a>					<a href="viewtopic-24741.php#p285"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
				</p>
			</td>
		</tr>
		<tr>
		<td class="cat" colspan="7" valign="middle" align="center"><span class="gensmall">Display posts from previous:</span> <select name="st" id="st"><option value="0" selected="selected">All results</option><option value="1">1 day</option><option value="7">7 days</option><option value="14">2 weeks</option><option value="30">1 month</option><option value="90">3 months</option><option value="180">6 months</option><option value="365">1 year</option></select>&nbsp;<span class="gensmall">Sort by:</span> <select name="sk" id="sk"><option value="a">Author</option><option value="t" selected="selected">Post time</option><option value="f">Forum</option><option value="i">Topic title</option><option value="s">Post subject</option></select> <select name="sd" id="sd"><option value="a">Ascending</option><option value="d" selected="selected">Descending</option></select>&nbsp;<input class="btnlite" type="submit" value="Go" name="sort" /></td>
	</tr>
	</table>


</form>

<div class="gensmall" style="float: left;"><span class="nav">Page <strong>1</strong> of <strong>1</strong></span> [ Search found 2 matches ]</div>
<div class="nav" style="float: right;"></div>

<br clear="all" /><br />

<table class="tablebg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tr>
		<td class="row1">
			<p class="breadcrumbs"><a href="index.php">Board index</a></p>
			<p class="datetime">All times are UTC [ <abbr title="Daylight Saving Time">DST</abbr> ]</p>
		</td>
	</tr>
	</table>
<br clear="all" />

<div align="right"></div>

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