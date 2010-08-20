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
<title>DILDANO &bull; View topic - (anyone for) image tennis?</title>

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
	var page = prompt('Enter the page number you wish to go to:', '3');
	var per_page = '10';
	var base_url = './viewtopic.php?f=4&amp;t=14';

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
			<td class="gensmall" align="right">It is currently Wed Jul 21, 2010 5:17 pm<br /></td>
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
			<p class="breadcrumbs"><a href="index.php">Board index</a> &#187; <a href="viewforum-11477.php">Other</a></p>
			<p class="datetime">All times are UTC [ <abbr title="Daylight Saving Time">DST</abbr> ]</p>
		</td>
	</tr>
	</table>
	<br />
<div id="pageheader">
	<h2><a class="titles" href="viewtopic-29336.php">(anyone for) image tennis?</a></h2>

</div>

<br clear="all" /><br />

<div id="pagecontent">

	<table width="100%" cellspacing="1">
	<tr>
		<td align="left" valign="middle" nowrap="nowrap">
		<a href="posting-43664.php"><img src="styles/dildano/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a>&nbsp;<a href="posting-48686.php"><img src="styles/dildano/imageset/en/button_topic_reply.gif" alt="Reply to topic" title="Reply to topic" /></a>		</td>
					<td class="nav" valign="middle" nowrap="nowrap">&nbsp;Page <strong>3</strong> of <strong>4</strong><br /></td>
			<td class="gensmall" nowrap="nowrap">&nbsp;[ 35 posts ]&nbsp;</td>
			<td class="gensmall" width="100%" align="right" nowrap="nowrap"><b><a href="#" onclick="jumpto(); return false;" title="Click to jump to page…">Go to page</a> <a href="viewtopic-10187.php">Previous</a>&nbsp;&nbsp;<a href="viewtopic-7659.php">1</a><span class="page-sep">, </span><a href="viewtopic-10187.php">2</a><span class="page-sep">, </span><strong>3</strong><span class="page-sep">, </span><a href="viewtopic-16809.php">4</a> &nbsp;<a href="viewtopic-16809.php">Next</a></b></td>
			</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat">
			<table width="100%" cellspacing="0">
			<tr>
				<td class="nav" nowrap="nowrap">&nbsp;
				<a href="viewtopic-29754.php" title="Print view">Print view</a>				</td>
				<td class="nav" align="right" nowrap="nowrap"><a href="viewtopic-19605.php">Previous topic</a> | <a href="viewtopic-28373.php">Next topic</a>&nbsp;</td>
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
				<a name="p124"></a>
				<b class="postauthor">grilgamesh</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: (anyone for) image tennis?</div><div style="float: right;"><a href="viewtopic-61276.php#p124"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Nov 06, 2009 5:37 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row1">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Wed Oct 14, 2009 2:01 pm<br /><b>Posts:</b> 13				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody">you could have put a timer on this to descend into pictures of vulvas. in the spirit of which...<br /><img src="http://reformedcovenanter.files.wordpress.com/2008/07/tropas-nazis.jpg" alt="Image" /></div>

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
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist-16598.php"><img src="styles/dildano/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">
			<td align="center" valign="middle">
				<a name="p126"></a>
				<b class="postauthor">bearblock</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: (anyone for) image tennis?</div><div style="float: right;"><a href="viewtopic-53022.php#p126"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Nov 06, 2009 10:18 pm&nbsp;</div></td>
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
					
						<div class="postbody"><img src="http://media.giantbomb.com/uploads/0/1302/179380-bj_wolfenstein_3d_large.jpg" alt="Image" /><br /><br />(any youse guys played the new one? it good?)</div>

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
				<a name="p131"></a>
				<b class="postauthor">orta</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: (anyone for) image tennis?</div><div style="float: right;"><a href="viewtopic-36040.php#p131"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sun Nov 08, 2009 2:29 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row1">
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
					
						<div class="postbody">Screw it:<br /><img src="http://brutaltechnopunk.com/images/tat-small.jpg" alt="Image" /></div>

											<span class="postbody"><br />_________________<br />---<br /><span style="color: #4080FF"><a href="http://ortatherox.com" class="postlink">http://ortatherox.com</a></span></span>
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
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist-38029.php"><img src="styles/dildano/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">
			<td align="center" valign="middle">
				<a name="p144"></a>
				<b class="postauthor">bearblock</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: (anyone for) image tennis?</div><div style="float: right;"><a href="viewtopic-17914.php#p144"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Thu Nov 12, 2009 5:13 pm&nbsp;</div></td>
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
					
						<div class="postbody"><div class="attachtitle">Attachment:</div><div class="attachcontent">			<img src="download/file-62757.php" alt="tattoo24.jpg" /><br />
			<span class="gensmall">tattoo24.jpg [ 52.26 KiB | Viewed 285 times ]</span>
		
		<br />
	</div><br /><br />though it looks like yer man still has room if he wants to get weird versions of all your faces around the K.</div>

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
				<a name="p165"></a>
				<b class="postauthor">orta</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: (anyone for) image tennis?</div><div style="float: right;"><a href="viewtopic-13241.php#p165"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Thu Nov 19, 2009 1:05 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row1">
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
					
						<div class="postbody"><img src="http://www.freewilliamsburg.com/archives/green-day.jpg" alt="Image" /><br />wut?</div>

											<span class="postbody"><br />_________________<br />---<br /><span style="color: #4080FF"><a href="http://ortatherox.com" class="postlink">http://ortatherox.com</a></span></span>
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
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist-38029.php"><img src="styles/dildano/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">
			<td align="center" valign="middle">
				<a name="p170"></a>
				<b class="postauthor">grilgamesh</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: (anyone for) image tennis?</div><div style="float: right;"><a href="viewtopic-20525.php#p170"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Nov 20, 2009 9:31 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row2">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Wed Oct 14, 2009 2:01 pm<br /><b>Posts:</b> 13				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody"><object width="425" height="350"><param name="movie" value="http://www.youtube.com/v/jCM0YRz05nQ"></param><param name="wmode" value="transparent"></param><embed src="http://www.youtube.com/v/jCM0YRz05nQ" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object></div>

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
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist-16598.php"><img src="styles/dildano/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">
			<td align="center" valign="middle">
				<a name="p176"></a>
				<b class="postauthor">grilgamesh</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: (anyone for) image tennis?</div><div style="float: right;"><a href="viewtopic-12523.php#p176"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Wed Nov 25, 2009 11:33 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row1">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Wed Oct 14, 2009 2:01 pm<br /><b>Posts:</b> 13				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody">did i win?</div>

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
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist-16598.php"><img src="styles/dildano/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">
			<td align="center" valign="middle">
				<a name="p180"></a>
				<b class="postauthor">bearblock</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: (anyone for) image tennis?</div><div style="float: right;"><a href="viewtopic-16403.php#p180"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Nov 27, 2009 5:10 pm&nbsp;</div></td>
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
					
						<div class="postbody">no one wins on the internet.<br /><br /><img src="http://www.btinternet.com/~comme6/saville/New_Order_Blue_Monday88.jpg" alt="Image" /></div>

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
				<a name="p221"></a>
				<b class="postauthor">grilgamesh</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: (anyone for) image tennis?</div><div style="float: right;"><a href="viewtopic-59049.php#p221"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Thu Dec 17, 2009 8:04 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row1">
			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
							</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Wed Oct 14, 2009 2:01 pm<br /><b>Posts:</b> 13				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					
						<div class="postbody"><img src="http://lh3.ggpht.com/_rCkM0TrTWD4/SyqAWQDLxdI/AAAAAAAAAJ8/cI76mre910E/ian%20curtis.JPG" alt="Image" /></div>

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
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist-16598.php"><img src="styles/dildano/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">
			<td align="center" valign="middle">
				<a name="p222"></a>
				<b class="postauthor">bearblock</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: (anyone for) image tennis?</div><div style="float: right;"><a href="viewtopic-54986.php#p222"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Thu Dec 17, 2009 10:34 pm&nbsp;</div></td>
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
					
						<div class="postbody"><img src="http://forbiddenplanet.co.uk/blog/wp-content/uploads/2008/06/Ray%20Harryhausen%20Jason%20Argonauts%20skeletons.jpg" alt="Image" /></div>

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
	<table width="100%" cellspacing="1" class="tablebg">
	<tr align="center">
		<td class="cat"><form name="viewtopic" method="post" action="./viewtopic.php?f=4&amp;t=14&amp;start=20"><span class="gensmall">Display posts from previous:</span> <select name="st" id="st"><option value="0" selected="selected">All posts</option><option value="1">1 day</option><option value="7">7 days</option><option value="14">2 weeks</option><option value="30">1 month</option><option value="90">3 months</option><option value="180">6 months</option><option value="365">1 year</option></select>&nbsp;<span class="gensmall">Sort by</span> <select name="sk" id="sk"><option value="a">Author</option><option value="t" selected="selected">Post time</option><option value="s">Subject</option></select> <select name="sd" id="sd"><option value="a" selected="selected">Ascending</option><option value="d">Descending</option></select>&nbsp;<input class="btnlite" type="submit" value="Go" name="sort" /></form></td>
	</tr>
	</table>
	
	<table width="100%" cellspacing="1">
	<tr>
		<td align="left" valign="middle" nowrap="nowrap">
		<a href="posting-43664.php"><img src="styles/dildano/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a>&nbsp;<a href="posting-48686.php"><img src="styles/dildano/imageset/en/button_topic_reply.gif" alt="Reply to topic" title="Reply to topic" /></a>		</td>
					<td class="nav" valign="middle" nowrap="nowrap">&nbsp;Page <strong>3</strong> of <strong>4</strong><br /></td>
			<td class="gensmall" nowrap="nowrap">&nbsp;[ 35 posts ]&nbsp;</td>
			<td class="gensmall" width="100%" align="right" nowrap="nowrap"><b><a href="#" onclick="jumpto(); return false;" title="Click to jump to page…">Go to page</a> <a href="viewtopic-10187.php">Previous</a>&nbsp;&nbsp;<a href="viewtopic-7659.php">1</a><span class="page-sep">, </span><a href="viewtopic-10187.php">2</a><span class="page-sep">, </span><strong>3</strong><span class="page-sep">, </span><a href="viewtopic-16809.php">4</a> &nbsp;<a href="viewtopic-16809.php">Next</a></b></td>
			</tr>
	</table>

</div>

<div id="pagefooter"></div>

<br clear="all" />

<table class="tablebg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tr>
		<td class="row1">
			<p class="breadcrumbs"><a href="index.php">Board index</a> &#187; <a href="viewforum-11477.php">Other</a></p>
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
	<td><form method="post" name="search" action="./search.php?t=14"><span class="gensmall">Search for:</span> <input class="post" type="text" name="keywords" size="20" /> <input class="btnlite" type="submit" value="Go" /></form></td>
	<td align="right"></td>
</tr>
</table>

<img src="cron-37894.php" width="1" height="1" alt="cron" /></div>

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