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
<title>DILDANO &bull; View forum - Dildano</title>

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
			<p class="breadcrumbs"><a href="index.php">Board index</a> &#187; <a href="viewforum-23602.php">Dildano</a></p>
			<p class="datetime">All times are UTC [ <abbr title="Daylight Saving Time">DST</abbr> ]</p>
		</td>
	</tr>
	</table>
	<br />	<div id="pageheader">
		<h2><a class="titles" href="viewforum-23042.php">Dildano</a></h2>

			</div>

	<br clear="all" /><br />

<div id="pagecontent">

		<table width="100%" cellspacing="1">
		<tr>
							<td align="left" valign="middle"><a href="posting-55927.php"><img src="styles/dildano/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a></td>
							<td class="nav" valign="middle" nowrap="nowrap">&nbsp;Page <strong>1</strong> of <strong>1</strong><br /></td>
				<td class="gensmall" nowrap="nowrap">&nbsp;[ 14 topics ]&nbsp;</td>
				<td class="gensmall" width="100%" align="right" nowrap="nowrap"></td>
					</tr>
		</table>
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" colspan="6">
				<table width="100%" cellspacing="0">
				<tr class="nav">
					<td valign="middle">&nbsp;</td>
					<td align="right" valign="middle">&nbsp;</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr>
							<th colspan="2">&nbsp;Topics&nbsp;</th>
						<th>&nbsp;Author&nbsp;</th>
			<th>&nbsp;Replies&nbsp;</th>
			<th>&nbsp;Views&nbsp;</th>
			<th>&nbsp;Last post&nbsp;</th>
		</tr>

		
			<tr>
				<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
								<td class="row1">
										<img src="styles/dildano/imageset/icon_topic_attach.gif" width="14" height="18" alt="Attachment(s)" title="Attachment(s)" /> <a title="Posted: Sun Sep 27, 2009 4:13 pm" href="viewtopic-16705.php" class="topictitle">Artwork</a>
											<p class="gensmall"> [ <img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" />Go to page: <a href="viewtopic-27953.php">1</a><span class="page-sep">, </span><a href="viewtopic-35177.php">2</a> ] </p>
									</td>
				<td class="row2" width="130" align="center"><p class="topicauthor"><a href="memberlist-41240.php">Nick</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">19</p></td>
				<td class="row2" width="50" align="center"><p class="topicdetails">616</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 30, 2010 1:39 pm</p>
					<p class="topicdetails"><a href="memberlist-38879.php">huangdong08</a>						<a href="viewtopic-56095.php#p305"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
				</td>
			</tr>

		
			<tr>
				<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
								<td class="row1">
										 <a title="Posted: Thu May 06, 2010 1:56 pm" href="viewtopic-23018.php" class="topictitle">B-sides\Outtakes</a>
									</td>
				<td class="row2" width="130" align="center"><p class="topicauthor"><a href="memberlist-41240.php">Nick</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1</p></td>
				<td class="row2" width="50" align="center"><p class="topicdetails">53</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 30, 2010 1:38 pm</p>
					<p class="topicdetails"><a href="memberlist-38879.php">huangdong08</a>						<a href="viewtopic-27268.php#p303"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
				</td>
			</tr>

		
			<tr>
				<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
								<td class="row1">
										 <a title="Posted: Sun May 23, 2010 2:24 pm" href="viewtopic-31144.php" class="topictitle">lawl at the new forum logo</a>
									</td>
				<td class="row2" width="130" align="center"><p class="topicauthor"><a href="memberlist-38029.php">orta</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">2</p></td>
				<td class="row2" width="50" align="center"><p class="topicdetails">99</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 30, 2010 1:37 pm</p>
					<p class="topicdetails"><a href="memberlist-38879.php">huangdong08</a>						<a href="viewtopic-14852.php#p300"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
				</td>
			</tr>

		
			<tr>
				<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
								<td class="row1">
										 <a title="Posted: Fri Sep 04, 2009 8:33 pm" href="viewtopic-57355.php" class="topictitle">Fancy bits</a>
											<p class="gensmall"> [ <img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" />Go to page: <a href="viewtopic-33449.php">1</a><span class="page-sep">, </span><a href="viewtopic-7592.php">2</a> ] </p>
									</td>
				<td class="row2" width="130" align="center"><p class="topicauthor"><a href="memberlist-37243.php">tim</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">12</p></td>
				<td class="row2" width="50" align="center"><p class="topicdetails">548</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu May 06, 2010 2:00 pm</p>
					<p class="topicdetails"><a href="memberlist-41240.php">Nick</a>						<a href="viewtopic-46552.php#p294"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
				</td>
			</tr>

		
			<tr>
				<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
								<td class="row1">
										 <a title="Posted: Fri Jan 22, 2010 6:12 pm" href="viewtopic-6716.php" class="topictitle">Track of the week - ALL WEEK LONG!!</a>
									</td>
				<td class="row2" width="130" align="center"><p class="topicauthor"><a href="memberlist-37243.php">tim</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1</p></td>
				<td class="row2" width="50" align="center"><p class="topicdetails">183</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu May 06, 2010 2:00 pm</p>
					<p class="topicdetails"><a href="memberlist-41240.php">Nick</a>						<a href="viewtopic-47547.php#p293"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
				</td>
			</tr>

		
			<tr>
				<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
								<td class="row1">
										 <a title="Posted: Tue Jan 05, 2010 4:36 pm" href="viewtopic-23224.php" class="topictitle">Whose your favaourite member of Dildano?</a>
									</td>
				<td class="row2" width="130" align="center"><p class="topicauthor"><a href="memberlist-54281.php">wacky rich</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">3</p></td>
				<td class="row2" width="50" align="center"><p class="topicdetails">248</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu May 06, 2010 1:58 pm</p>
					<p class="topicdetails"><a href="memberlist-41240.php">Nick</a>						<a href="viewtopic-22591.php#p291"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
				</td>
			</tr>

		
			<tr>
				<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
								<td class="row1">
										 <a title="Posted: Thu May 06, 2010 1:57 pm" href="viewtopic-18891.php" class="topictitle">Wacky Time Rangers</a>
									</td>
				<td class="row2" width="130" align="center"><p class="topicauthor"><a href="memberlist-41240.php">Nick</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">0</p></td>
				<td class="row2" width="50" align="center"><p class="topicdetails">59</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu May 06, 2010 1:57 pm</p>
					<p class="topicdetails"><a href="memberlist-41240.php">Nick</a>						<a href="viewtopic-28462.php#p290"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
				</td>
			</tr>

		
			<tr>
				<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
								<td class="row1">
										 <a title="Posted: Mon Mar 22, 2010 2:28 pm" href="viewtopic-60371.php" class="topictitle">FZ1 sampler - how's it going?</a>
									</td>
				<td class="row2" width="130" align="center"><p class="topicauthor"><a href="memberlist-1444.php">crispyjay</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">0</p></td>
				<td class="row2" width="50" align="center"><p class="topicdetails">102</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Mon Mar 22, 2010 2:28 pm</p>
					<p class="topicdetails"><a href="memberlist-1444.php">crispyjay</a>						<a href="viewtopic-24741.php#p285"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
				</td>
			</tr>

		
			<tr>
				<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
								<td class="row1">
										 <a title="Posted: Tue Dec 22, 2009 6:58 pm" href="viewtopic-31482.php" class="topictitle">New Year Eve Gig</a>
									</td>
				<td class="row2" width="130" align="center"><p class="topicauthor"><a href="memberlist-37243.php">tim</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1</p></td>
				<td class="row2" width="50" align="center"><p class="topicdetails">179</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Sun Dec 27, 2009 3:35 am</p>
					<p class="topicdetails"><a href="memberlist-45369.php">Bean</a>						<a href="viewtopic-59252.php#p232"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
				</td>
			</tr>

		
			<tr>
				<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
								<td class="row1">
										 <a title="Posted: Tue Nov 10, 2009 4:17 am" href="viewtopic-45210.php" class="topictitle">Hey I'm new</a>
									</td>
				<td class="row2" width="130" align="center"><p class="topicauthor">JAGGIPBOANO</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">5</p></td>
				<td class="row2" width="50" align="center"><p class="topicdetails">252</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Nov 12, 2009 5:04 pm</p>
					<p class="topicdetails"><a href="memberlist-57756.php">bearblock</a>						<a href="viewtopic-5756.php#p143"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
				</td>
			</tr>

		
			<tr>
				<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
								<td class="row1">
										 <a title="Posted: Thu Nov 12, 2009 1:26 pm" href="viewtopic-16757.php" class="topictitle">Introduction</a>
									</td>
				<td class="row2" width="130" align="center"><p class="topicauthor">utimoutSise</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1</p></td>
				<td class="row2" width="50" align="center"><p class="topicdetails">131</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Nov 12, 2009 1:53 pm</p>
					<p class="topicdetails"><a href="memberlist-37243.php">tim</a>						<a href="viewtopic-36020.php#p142"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
				</td>
			</tr>

		
			<tr>
				<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
								<td class="row1">
										 <a title="Posted: Sun Nov 08, 2009 2:27 pm" href="viewtopic-41147.php" class="topictitle">Our fans &gt; your fans.</a>
									</td>
				<td class="row2" width="130" align="center"><p class="topicauthor"><a href="memberlist-38029.php">orta</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">2</p></td>
				<td class="row2" width="50" align="center"><p class="topicdetails">267</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Tue Nov 10, 2009 5:46 pm</p>
					<p class="topicdetails"><a href="memberlist-37243.php">tim</a>						<a href="viewtopic-26415.php#p136"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
				</td>
			</tr>

		
			<tr>
				<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
								<td class="row1">
										 <a title="Posted: Mon Oct 05, 2009 7:36 pm" href="viewtopic-46444.php" class="topictitle">The new Dildano Wiki</a>
									</td>
				<td class="row2" width="130" align="center"><p class="topicauthor"><a href="memberlist-20727.php">Stavros</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">3</p></td>
				<td class="row2" width="50" align="center"><p class="topicdetails">267</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Oct 28, 2009 3:03 pm</p>
					<p class="topicdetails"><a href="memberlist-41240.php">Nick</a>						<a href="viewtopic-49552.php#p86"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
				</td>
			</tr>

		
			<tr>
				<td class="row1" width="25" align="center"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
								<td class="row1">
										 <a title="Posted: Wed Sep 16, 2009 1:02 pm" href="viewtopic-41103.php" class="topictitle">24 october, bhone. dildano, kieronononon, skitanja, yaaaaaaa</a>
									</td>
				<td class="row2" width="130" align="center"><p class="topicauthor">hello</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">3</p></td>
				<td class="row2" width="50" align="center"><p class="topicdetails">217</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Sun Sep 27, 2009 4:27 pm</p>
					<p class="topicdetails"><a href="memberlist-41240.php">Nick</a>						<a href="viewtopic-9731.php#p25"><img src="styles/dildano/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>					</p>
				</td>
			</tr>

				<tr align="center">
							<td class="cat" colspan="6">
								<form method="post" action="./viewforum.php?f=3&amp;start=0"><span class="gensmall">Display topics from previous:</span>&nbsp;<select name="st" id="st"><option value="0" selected="selected">All Topics</option><option value="1">1 day</option><option value="7">7 days</option><option value="14">2 weeks</option><option value="30">1 month</option><option value="90">3 months</option><option value="180">6 months</option><option value="365">1 year</option></select>&nbsp;<span class="gensmall">Sort by</span> <select name="sk" id="sk"><option value="a">Author</option><option value="t" selected="selected">Post time</option><option value="r">Replies</option><option value="s">Subject</option><option value="v">Views</option></select> <select name="sd" id="sd"><option value="a">Ascending</option><option value="d" selected="selected">Descending</option></select>&nbsp;<input class="btnlite" type="submit" name="sort" value="Go" /></form>
				</td>
		</tr>
				</table>
			<table width="100%" cellspacing="1">
		<tr>
							<td align="left" valign="middle"><a href="posting-55927.php"><img src="styles/dildano/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a></td>
							<td class="nav" valign="middle" nowrap="nowrap">&nbsp;Page <strong>1</strong> of <strong>1</strong><br /></td>
				<td class="gensmall" nowrap="nowrap">&nbsp;[ 14 topics ]&nbsp;</td>
				<td class="gensmall" width="100%" align="right" nowrap="nowrap"></td>
					</tr>
		</table>
	
		<br clear="all" />
</div>

<table class="tablebg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tr>
		<td class="row1">
			<p class="breadcrumbs"><a href="index.php">Board index</a> &#187; <a href="viewforum-23602.php">Dildano</a></p>
			<p class="datetime">All times are UTC [ <abbr title="Daylight Saving Time">DST</abbr> ]</p>
		</td>
	</tr>
	</table>	<br clear="all" />

	<table width="100%" cellspacing="0">
	<tr>
		<td align="left" valign="top">
			<table cellspacing="3" cellpadding="0" border="0">
			<tr>
				<td width="20" style="text-align: center;"><img src="styles/dildano/imageset/topic_unread.gif" width="19" height="18" alt="New posts" title="New posts" /></td>
				<td class="gensmall">New posts</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" style="text-align: center;"><img src="styles/dildano/imageset/topic_read.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
				<td class="gensmall">No new posts</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" style="text-align: center;"><img src="styles/dildano/imageset/announce_read.gif" width="19" height="18" alt="Announce" title="Announce" /></td>
				<td class="gensmall">Announcement</td>
			</tr>
			<tr>
				<td style="text-align: center;"><img src="styles/dildano/imageset/topic_unread_hot.gif" width="19" height="18" alt="New posts [ Popular ]" title="New posts [ Popular ]" /></td>
				<td class="gensmall">New posts [ Popular ]</td>
				<td>&nbsp;&nbsp;</td>
				<td style="text-align: center;"><img src="styles/dildano/imageset/topic_read_hot.gif" width="19" height="18" alt="No new posts [ Popular ]" title="No new posts [ Popular ]" /></td>
				<td class="gensmall">No new posts [ Popular ]</td>
				<td>&nbsp;&nbsp;</td>
				<td style="text-align: center;"><img src="styles/dildano/imageset/sticky_read.gif" width="19" height="18" alt="Sticky" title="Sticky" /></td>
				<td class="gensmall">Sticky</td>
			</tr>
			<tr>
				<td style="text-align: center;"><img src="styles/dildano/imageset/topic_unread_locked.gif" width="19" height="18" alt="New posts [ Locked ]" title="New posts [ Locked ]" /></td>
				<td class="gensmall">New posts [ Locked ]</td>
				<td>&nbsp;&nbsp;</td>
				<td style="text-align: center;"><img src="styles/dildano/imageset/topic_read_locked.gif" width="19" height="18" alt="No new posts [ Locked ]" title="No new posts [ Locked ]" /></td>
				<td class="gensmall">No new posts [ Locked ]</td>
				<td>&nbsp;&nbsp;</td>
				<td style="text-align: center;"><img src="styles/dildano/imageset/topic_moved.gif" width="19" height="18" alt="Moved topic" title="Moved topic" /></td>
				<td class="gensmall">Moved topic</td>
			</tr>
			</table>
		</td>
		<td align="right"><span class="gensmall">You <strong>cannot</strong> post new topics in this forum<br />You <strong>cannot</strong> reply to topics in this forum<br />You <strong>cannot</strong> edit your posts in this forum<br />You <strong>cannot</strong> delete your posts in this forum<br />You <strong>cannot</strong> post attachments in this forum<br /></span></td>
	</tr>
	</table>

<br clear="all" />

<table width="100%" cellspacing="0">
<tr>
	<td><form method="post" name="search" action="./search.php?fid[]=3"><span class="gensmall">Search for:</span> <input class="post" type="text" name="keywords" size="20" /> <input class="btnlite" type="submit" value="Go" /></form></td>
	<td align="right"></td>
</tr>
</table>

<img src="cron-10005.php" width="1" height="1" alt="cron" /></div>

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