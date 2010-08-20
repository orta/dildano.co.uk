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
<title>DILDANO &bull; View topic - Fancy bits</title>

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
	var per_page = '10';
	var base_url = './viewtopic.php?f=3&amp;t=2';

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
	<br />
<div id="pageheader">
	<h2><a class="titles" href="viewtopic-33449.php">Fancy bits</a></h2>

</div>

<br clear="all" /><br />

<div id="pagecontent">

	<table width="100%" cellspacing="1">
	<tr>
		<td align="left" valign="middle" nowrap="nowrap">
		<a href="posting-55927.php"><img src="styles/dildano/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a>&nbsp;<a href="posting-33780.php"><img src="styles/dildano/imageset/en/button_topic_reply.gif" alt="Reply to topic" title="Reply to topic" /></a>		</td>
					<td class="nav" valign="middle" nowrap="nowrap">&nbsp;Page <strong>1</strong> of <strong>2</strong><br /></td>
			<td class="gensmall" nowrap="nowrap">&nbsp;[ 13 posts ]&nbsp;</td>
			<td class="gensmall" width="100%" align="right" nowrap="nowrap"><b><a href="#" onclick="jumpto(); return false;" title="Click to jump to page…">Go to page</a> <strong>1</strong><span class="page-sep">, </span><a href="viewtopic-7592.php">2</a> &nbsp;<a href="viewtopic-7592.php">Next</a></b></td>
			</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat">
			<table width="100%" cellspacing="0">
			<tr>
				<td class="nav" nowrap="nowrap">&nbsp;
				<a href="viewtopic-34012.php" title="Print view">Print view</a>				</td>
				<td class="nav" align="right" nowrap="nowrap"><a href="viewtopic-50395.php">Previous topic</a> | <a href="viewtopic-39628.php">Next topic</a>&nbsp;</td>
			</tr>
			</table>
		</td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
			<tr>
			<th>Author</th>
			<th>Message</th>
		</tr>
	<tr class="row1">
			<td align="center" valign="middle">
				<a name="p2"></a>
				<b class="postauthor">tim</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Fancy bits</div><div style="float: right;"><a href="viewtopic-48592.php#p2"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Sep 04, 2009 8:33 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row1">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Fri Sep 04, 2009 8:31 pm<br /><b>Posts:</b> 73				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody">When I use this forum.....I am <span style="color: #BF40BF">OVERWHELMED</span><span style="color: #00BF00">!!!!!</span></div>

					<br clear="all" /><br />
						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
														</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">
			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist-37243.php"><img src="styles/dildano/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">
			<td align="center" valign="middle">
				<a name="p5"></a>
				<b class="postauthor">wacky rich</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Fancy bits</div><div style="float: right;"><a href="viewtopic-52535.php#p5"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Mon Sep 07, 2009 10:17 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row2">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							</table>

				<span class="postdetails">
									</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody">so just because you play a gig in london you decide you can have a fancy forum?</div>

					<br clear="all" /><br />
						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
														</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">
			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;&nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">
			<td align="center" valign="middle">
				<a name="p6"></a>
				<b class="postauthor">bearblock</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Fancy bits</div><div style="float: right;"><a href="viewtopic-64852.php#p6"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Wed Sep 09, 2009 3:28 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row1">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							<tr>
					<td><img src="download/file-60368.php" width="100" height="93" alt="User avatar" /></td>
				</tr>
							</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Fri Sep 04, 2009 6:06 pm<br /><b>Posts:</b> 60				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody">it's quite feature-filled isn't it? luckily i managed to ruin the stylesheet to preserve some of the original's smelly charm.</div>

											<span class="postbody"><br />_________________<br /><a href="http://www.last.fm/user/bearblock" class="postlink">http://www.last.fm/user/bearblock</a><br /><a href="http://www.youtube.com/user/bearblock" class="postlink">http://www.youtube.com/user/bearblock</a></span>
					<br clear="all" /><br />
						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
														</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">
			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist-57756.php"><img src="styles/dildano/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">
			<td align="center" valign="middle">
				<a name="p13"></a>
				<b class="postauthor">piss</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Fancy bits</div><div style="float: right;"><a href="viewtopic-62741.php#p13"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Wed Sep 16, 2009 12:55 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row2">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							</table>

				<span class="postdetails">
									</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody">nice forum.<br />see you on the 24 of octoberrrrrrr. \m/</div>

					<br clear="all" /><br />
						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
														</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">
			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;&nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">
			<td align="center" valign="middle">
				<a name="p16"></a>
				<b class="postauthor">Stavros</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Fancy bits</div><div style="float: right;"><a href="viewtopic-42416.php#p16"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Tue Sep 22, 2009 7:20 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row1">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							</table>

				<span class="postdetails">
									</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody">...and the MTV award for best new band forum website goes to... <a href="http://kanyelicious.appspot.com/http:/www.dildano.com/phpBB3/" class="postlink">the Dildano Forum</a>!</div>

					<br clear="all" /><br />
						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
														</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">
			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;&nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">
			<td align="center" valign="middle">
				<a name="p17"></a>
				<b class="postauthor">Guest</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Fancy bits</div><div style="float: right;"><a href="viewtopic-46481.php#p17"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Tue Sep 22, 2009 7:21 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row2">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							</table>

				<span class="postdetails">
									</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody">PS. you're supposed to click on where it says &quot;the Dildano Forum&quot;.<br /><br />Thom, how about underlining links or at perhaps changing their colour?!</div>

					<br clear="all" /><br />
						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
														</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">
			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;&nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">
			<td align="center" valign="middle">
				<a name="p18"></a>
				<b class="postauthor">Guest</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Fancy bits</div><div style="float: right;"><a href="viewtopic-17534.php#p18"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Tue Sep 22, 2009 7:22 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row1">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							</table>

				<span class="postdetails">
									</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody">at?</div>

					<br clear="all" /><br />
						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
														</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">
			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;&nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">
			<td align="center" valign="middle">
				<a name="p19"></a>
				<b class="postauthor">bearblock</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Fancy bits</div><div style="float: right;"><a href="viewtopic-21599.php#p19"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Thu Sep 24, 2009 2:25 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row2">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							<tr>
					<td><img src="download/file-60368.php" width="100" height="93" alt="User avatar" /></td>
				</tr>
							</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Fri Sep 04, 2009 6:06 pm<br /><b>Posts:</b> 60				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody">oh Kanye. The sad thing is he had a point, 'Single Ladies' is clearly &gt; 'You Belong With Me', but he expressed it like a jackass. I've at had a go at the <a href="http://www.encyclopediadramatica.com/Imma_Let_You_Finish" class="postlink">links</a>, should probably look into separating the posts a bit better too...</div>

											<span class="postbody"><br />_________________<br /><a href="http://www.last.fm/user/bearblock" class="postlink">http://www.last.fm/user/bearblock</a><br /><a href="http://www.youtube.com/user/bearblock" class="postlink">http://www.youtube.com/user/bearblock</a></span>
					<br clear="all" /><br />
						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
														</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">
			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist-57756.php"><img src="styles/dildano/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">
			<td align="center" valign="middle">
				<a name="p28"></a>
				<b class="postauthor">Nick</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Fancy bits</div><div style="float: right;"><a href="viewtopic-4397.php#p28"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Mon Sep 28, 2009 5:30 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row1">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sun Sep 27, 2009 4:10 pm<br /><b>Posts:</b> 17				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody">I had a dream about this last night. It was awesome!</div>

					<br clear="all" /><br />
						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
														</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">
			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist-41240.php"><img src="styles/dildano/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">
			<td align="center" valign="middle">
				<a name="p190"></a>
				<b class="postauthor">gussyboyy</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Fancy bits</div><div style="float: right;"><a href="viewtopic-29474.php#p190"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Dec 04, 2009 2:40 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row2">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Wed Oct 28, 2009 10:58 am<br /><b>Posts:</b> 32				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody">Why don't you have a fancy icon/logo on the web address bar like all the other big websites have? Facebook has an f. Google has a g. You could have a cheetah. Get it sorted.</div>

					<br clear="all" /><br />
						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
														</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">
			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist-42222.php"><img src="styles/dildano/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table width="100%" cellspacing="1" class="tablebg">
	<tr align="center">
		<td class="cat"><form name="viewtopic" method="post" action="./viewtopic.php?f=3&amp;t=2&amp;start=0"><span class="gensmall">Display posts from previous:</span> <select name="st" id="st"><option value="0" selected="selected">All posts</option><option value="1">1 day</option><option value="7">7 days</option><option value="14">2 weeks</option><option value="30">1 month</option><option value="90">3 months</option><option value="180">6 months</option><option value="365">1 year</option></select>&nbsp;<span class="gensmall">Sort by</span> <select name="sk" id="sk"><option value="a">Author</option><option value="t" selected="selected">Post time</option><option value="s">Subject</option></select> <select name="sd" id="sd"><option value="a" selected="selected">Ascending</option><option value="d">Descending</option></select>&nbsp;<input class="btnlite" type="submit" value="Go" name="sort" /></form></td>
	</tr>
	</table>
	
	<table width="100%" cellspacing="1">
	<tr>
		<td align="left" valign="middle" nowrap="nowrap">
		<a href="posting-55927.php"><img src="styles/dildano/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a>&nbsp;<a href="posting-33780.php"><img src="styles/dildano/imageset/en/button_topic_reply.gif" alt="Reply to topic" title="Reply to topic" /></a>		</td>
					<td class="nav" valign="middle" nowrap="nowrap">&nbsp;Page <strong>1</strong> of <strong>2</strong><br /></td>
			<td class="gensmall" nowrap="nowrap">&nbsp;[ 13 posts ]&nbsp;</td>
			<td class="gensmall" width="100%" align="right" nowrap="nowrap"><b><a href="#" onclick="jumpto(); return false;" title="Click to jump to page…">Go to page</a> <strong>1</strong><span class="page-sep">, </span><a href="viewtopic-7592.php">2</a> &nbsp;<a href="viewtopic-7592.php">Next</a></b></td>
			</tr>
	</table>

</div>

<div id="pagefooter"></div>

<br clear="all" />

<table class="tablebg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tr>
		<td class="row1">
			<p class="breadcrumbs"><a href="index.php">Board index</a> &#187; <a href="viewforum-23602.php">Dildano</a></p>
			<p class="datetime">All times are UTC [ <abbr title="Daylight Saving Time">DST</abbr> ]</p>
		</td>
	</tr>
	</table>
<br clear="all" />

<table width="100%" cellspacing="1">
<tr>
	<td width="40%" valign="top" nowrap="nowrap" align="left"></td>
	<td align="right" valign="top" nowrap="nowrap"><span class="gensmall">You <strong>cannot</strong> post new topics in this forum<br />You <strong>cannot</strong> reply to topics in this forum<br />You <strong>cannot</strong> edit your posts in this forum<br />You <strong>cannot</strong> delete your posts in this forum<br />You <strong>cannot</strong> post attachments in this forum<br /></span></td>
</tr>
</table>

<br clear="all" />

<table width="100%" cellspacing="0">
<tr>
	<td><form method="post" name="search" action="./search.php?t=2"><span class="gensmall">Search for:</span> <input class="post" type="text" name="keywords" size="20" /> <input class="btnlite" type="submit" value="Go" /></form></td>
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