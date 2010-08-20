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
<title>DILDANO &bull; View topic - Artwork</title>

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
	var page = prompt('Enter the page number you wish to go to:', '2');
	var per_page = '10';
	var base_url = './viewtopic.php?f=3&amp;t=8';

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


	/**
	* Play quicktime file by determining it's width/height
	* from the displayed rectangle area
	*
	* Only defined if there is a file block present.
	*/
	function play_qt_file(obj)
	{
		var rectangle = obj.GetRectangle();

		if (rectangle)
		{
			rectangle = rectangle.split(',')
			var x1 = parseInt(rectangle[0]);
			var x2 = parseInt(rectangle[2]);
			var y1 = parseInt(rectangle[1]);
			var y2 = parseInt(rectangle[3]);

			var width = (x1 < 0) ? (x1 * -1) + x2 : x2 - x1;
			var height = (y1 < 0) ? (y1 * -1) + y2 : y2 - y1;
		}
		else
		{
			var width = 200;
			var height = 0;
		}

		obj.width = width;
		obj.height = height + 16;

		obj.SetControllerVisible(true);

		obj.Play();
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
	<h2><a class="titles" href="viewtopic-35177.php">Artwork</a></h2>

</div>

<br clear="all" /><br />

<div id="pagecontent">

	<table width="100%" cellspacing="1">
	<tr>
		<td align="left" valign="middle" nowrap="nowrap">
		<a href="posting-55927.php"><img src="styles/dildano/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a>&nbsp;<a href="posting-8894.php"><img src="styles/dildano/imageset/en/button_topic_reply.gif" alt="Reply to topic" title="Reply to topic" /></a>		</td>
					<td class="nav" valign="middle" nowrap="nowrap">&nbsp;Page <strong>2</strong> of <strong>2</strong><br /></td>
			<td class="gensmall" nowrap="nowrap">&nbsp;[ 20 posts ]&nbsp;</td>
			<td class="gensmall" width="100%" align="right" nowrap="nowrap"><b><a href="#" onclick="jumpto(); return false;" title="Click to jump to page…">Go to page</a> <a href="viewtopic-27953.php">Previous</a>&nbsp;&nbsp;<a href="viewtopic-16705.php">1</a><span class="page-sep">, </span><strong>2</strong></b></td>
			</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat">
			<table width="100%" cellspacing="0">
			<tr>
				<td class="nav" nowrap="nowrap">&nbsp;
				<a href="viewtopic-51334.php" title="Print view">Print view</a>				</td>
				<td class="nav" align="right" nowrap="nowrap"><a href="viewtopic-44615.php">Previous topic</a> | <a href="viewtopic-39153.php">Next topic</a>&nbsp;</td>
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
				<a name="p78"></a>
				<b class="postauthor">vinegarmouse</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-61144.php#p78"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sun Oct 25, 2009 11:23 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row1">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sun Oct 25, 2009 11:00 pm<br /><b>Posts:</b> 4				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody">As you can see, Paul was WRONG.<br /><br />Here is my contribution -<br /><br /><br /><br /><div class="attachtitle">Attachment:</div><div class="attachcontent">			<img src="download/file-55411.php" alt="The Buzzard Maze.JPG" /><br />
			<span class="gensmall">The Buzzard Maze.JPG [ 95.77 KiB | Viewed 258 times ]</span>
		
		<br />
	</div></div>

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
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist-33964.php"><img src="styles/dildano/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">
			<td align="center" valign="middle">
				<a name="p79"></a>
				<b class="postauthor">orta</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-65273.php#p79"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Mon Oct 26, 2009 5:58 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row2">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Mon Oct 26, 2009 5:53 pm<br /><b>Posts:</b> 13				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody">I might've posted this in the other forum, don't remember</div>

											<br clear="all" /><br />

						<table class="tablebg" width="100%" cellspacing="1">
						<tr>
							<td class="row3"><b class="genmed">Attachments: </b></td>
						</tr>
													<tr>
								<td class="row2">			<img src="download/file-10652.php" alt="dildano-thebuzzardmaze.png" /><br />
			<span class="gensmall">dildano-thebuzzardmaze.png [ 21.84 KiB | Viewed 254 times ]</span>
		
		<br />
	</td>
							</tr>
												</table>
											<span class="postbody"><br />_________________<br />---<br /><span style="color: #4080FF"><a href="http://ortatherox.com" class="postlink">http://ortatherox.com</a></span></span>
					
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
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist-38029.php"><img src="styles/dildano/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">
			<td align="center" valign="middle">
				<a name="p82"></a>
				<b class="postauthor">bearblock</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-24492.php#p82"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Mon Oct 26, 2009 11:09 pm&nbsp;</div></td>
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
					
						<div class="postbody">nice work people! i'd forgotten how cool a buzzard looks, or even what it was meant to represent in the title. i think some of our ideas involved an actual maze, while others involved Tim getting his dad to draw a naked woman with a beak.<br /><br />also, it turns out <a href="http://www.last.fm/group/Maze+Rock" class="postlink">'maze rock'</a> is an actual thing, more or less in the sense we intended. who knew?</div>

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
				<a name="p83"></a>
				<b class="postauthor">bearblock</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-20365.php#p83"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Mon Oct 26, 2009 11:13 pm&nbsp;</div></td>
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
					
						<div class="postbody">may as well add this thing i made to the turmoil. it's not an album cover, but it is both a poster and a flier.<br /><br /><div class="attachtitle">Attachment:</div><div class="attachcontent">			<img src="download/file-14781.php" alt="dildano-poster-small.jpg" /><br />
			<span class="gensmall">dildano-poster-small.jpg [ 53.74 KiB | Viewed 249 times ]</span>
		
		<br />
	</div></div>

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
				<a name="p85"></a>
				<b class="postauthor">Nick</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-12107.php#p85"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Wed Oct 28, 2009 3:00 pm&nbsp;</div></td>
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
					
						<div class="postbody">Fail!</div>

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
				<a name="p127"></a>
				<b class="postauthor">bearblock</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-57151.php#p127"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Nov 06, 2009 11:12 pm&nbsp;</div></td>
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
					
						<div class="postbody"><div class="quotetitle">Nick wrote:</div><div class="quotecontent">Fail!</div><br /><br />OH SHI-<br /><br /><div class="attachtitle">Attachment:</div><div class="attachcontent">			<img src="download/file-58628.php" alt="Animator__s_Commish_by_Kuit.gif" /><br />
			<span class="gensmall">Animator__s_Commish_by_Kuit.gif [ 128.01 KiB | Viewed 233 times ]</span>
		
		<br />
	</div></div>

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
				<a name="p128"></a>
				<b class="postauthor">tim</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-11984.php#p128"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sat Nov 07, 2009 12:21 pm&nbsp;</div></td>
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
					
						<div class="postbody">Oh my... um....ew. We may have a winner? I might be going away to be sick for a while.</div>

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
				<a name="p129"></a>
				<b class="postauthor">bearblock</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-16113.php#p129"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sat Nov 07, 2009 4:59 pm&nbsp;</div></td>
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
					
						<div class="postbody">sadly that's some of the less bad furry bird girl art on the internet. I went for this one because she's clearly drunker than a member of Dildano after playing a show; and then Comic Sans for extra lulz. no one actually use it please.</div>

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
				<a name="p292"></a>
				<b class="postauthor">Nick</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-2608.php#p292"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Thu May 06, 2010 1:59 pm&nbsp;</div></td>
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
					
						<div class="postbody">You should get Kenny's mate Wolfman to do some 'Wolf' inspired artwork.</div>

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
				<a name="p305"></a>
				<b class="postauthor">huangdong08</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> granted</div><div style="float: right;"><a href="viewtopic-63359.php#p305"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Wed Jun 30, 2010 1:39 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row2">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Fri Jun 04, 2010 2:13 pm<br /><b>Posts:</b> 8				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody">Juicy terry sportswear brand is started by <a href="http://www.replicabalenciaga.com/" class="postlink">balenciaga</a>, so towel material is essential, this <a href="http://www.juicycouture2u.com/" class="postlink">juicy couture outlet</a> also came to a Beachwear version of <a href="http://www.juicycouture2u.com/" class="postlink">juicy couture bags</a> towel series, such as the style may gowns hooded beach skirts and <a href="http://www.juicycouture2u.com/" class="postlink">juicy couture shoes</a> drawstring shorts, granted, there are beach necessary towel cloth <a href="http://www.juicycouture2u.com/" class="postlink">juicy couture watch</a> and sun caps.</div>

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
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist-38879.php"><img src="styles/dildano/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table width="100%" cellspacing="1" class="tablebg">
	<tr align="center">
		<td class="cat"><form name="viewtopic" method="post" action="./viewtopic.php?f=3&amp;t=8&amp;start=10"><span class="gensmall">Display posts from previous:</span> <select name="st" id="st"><option value="0" selected="selected">All posts</option><option value="1">1 day</option><option value="7">7 days</option><option value="14">2 weeks</option><option value="30">1 month</option><option value="90">3 months</option><option value="180">6 months</option><option value="365">1 year</option></select>&nbsp;<span class="gensmall">Sort by</span> <select name="sk" id="sk"><option value="a">Author</option><option value="t" selected="selected">Post time</option><option value="s">Subject</option></select> <select name="sd" id="sd"><option value="a" selected="selected">Ascending</option><option value="d">Descending</option></select>&nbsp;<input class="btnlite" type="submit" value="Go" name="sort" /></form></td>
	</tr>
	</table>
	
	<table width="100%" cellspacing="1">
	<tr>
		<td align="left" valign="middle" nowrap="nowrap">
		<a href="posting-55927.php"><img src="styles/dildano/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a>&nbsp;<a href="posting-8894.php"><img src="styles/dildano/imageset/en/button_topic_reply.gif" alt="Reply to topic" title="Reply to topic" /></a>		</td>
					<td class="nav" valign="middle" nowrap="nowrap">&nbsp;Page <strong>2</strong> of <strong>2</strong><br /></td>
			<td class="gensmall" nowrap="nowrap">&nbsp;[ 20 posts ]&nbsp;</td>
			<td class="gensmall" width="100%" align="right" nowrap="nowrap"><b><a href="#" onclick="jumpto(); return false;" title="Click to jump to page…">Go to page</a> <a href="viewtopic-27953.php">Previous</a>&nbsp;&nbsp;<a href="viewtopic-16705.php">1</a><span class="page-sep">, </span><strong>2</strong></b></td>
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
	<td><form method="post" name="search" action="./search.php?t=8"><span class="gensmall">Search for:</span> <input class="post" type="text" name="keywords" size="20" /> <input class="btnlite" type="submit" value="Go" /></form></td>
	<td align="right"></td>
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