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
	var page = prompt('Enter the page number you wish to go to:', '1');
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
			<td class="gensmall" align="right">It is currently Wed Jul 21, 2010 5:16 pm<br /></td>
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
	<h2><a class="titles" href="viewtopic-27953.php">Artwork</a></h2>

</div>

<br clear="all" /><br />

<div id="pagecontent">

	<table width="100%" cellspacing="1">
	<tr>
		<td align="left" valign="middle" nowrap="nowrap">
		<a href="posting-55927.php"><img src="styles/dildano/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a>&nbsp;<a href="posting-8894.php"><img src="styles/dildano/imageset/en/button_topic_reply.gif" alt="Reply to topic" title="Reply to topic" /></a>		</td>
					<td class="nav" valign="middle" nowrap="nowrap">&nbsp;Page <strong>1</strong> of <strong>2</strong><br /></td>
			<td class="gensmall" nowrap="nowrap">&nbsp;[ 20 posts ]&nbsp;</td>
			<td class="gensmall" width="100%" align="right" nowrap="nowrap"><b><a href="#" onclick="jumpto(); return false;" title="Click to jump to page…">Go to page</a> <strong>1</strong><span class="page-sep">, </span><a href="viewtopic-35177.php">2</a> &nbsp;<a href="viewtopic-35177.php">Next</a></b></td>
			</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat">
			<table width="100%" cellspacing="0">
			<tr>
				<td class="nav" nowrap="nowrap">&nbsp;
				<a href="viewtopic-20995.php" title="Print view">Print view</a>				</td>
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
				<a name="p24"></a>
				<b class="postauthor">Nick</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Artwork</div><div style="float: right;"><a href="viewtopic-53409.php#p24"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sun Sep 27, 2009 4:13 pm&nbsp;</div></td>
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
					
						<div class="postbody">I've just got a fancy new MP3 player (one of those ones that shows the album cover on the screen when the album's playing) and is there anyway that the covers from the your releases could be uploaded somewhere, so I can put them on the albums on my MP3 player?  <br /><br />It's just annoying when I play A Disapointing Evening, Croc-op and Buzzard and not see the covers behind.</div>

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
				<a name="p29"></a>
				<b class="postauthor">bearblock</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-268.php#p29"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Mon Sep 28, 2009 7:29 pm&nbsp;</div></td>
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
					
						<div class="postbody">there's no cover for the buzzard maze. recording the bastard had taken long enough so we just released it without one.<br /><br />the front of 'a disappointing evening' as simply a big cheetah, in fact the one we used is bigger than my screen for some reason so it would be twattish to post it here. why not draw your own?<br /><br />here's crocodileopolis<br /><div class="attachtitle">Attachment:</div><div class="attachcontent">			<img src="download/file-39159.php" alt="crocodileopolis.jpg" /><br />
			<span class="gensmall">crocodileopolis.jpg [ 101.72 KiB | Viewed 357 times ]</span>
		
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
				<a name="p34"></a>
				<b class="postauthor">Nick</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-58256.php#p34"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Thu Oct 01, 2009 11:46 am&nbsp;</div></td>
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
					
						<div class="postbody">That's the bugger!<br /><br />I think I have the original one at my folks (i.e. the piece of paper folded over and stapled) so I'll jsut scan it next time I'm at home.<br /><br />I do love the Croc-op album cover though.</div>

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
				<a name="p42"></a>
				<b class="postauthor">grilgamesh</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-6849.php#p42"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Wed Oct 14, 2009 2:05 pm&nbsp;</div></td>
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
					
						<div class="postbody">speaking of the buzzard maze - which really should have some sort of cover - how did you record it? it sounds well posh. did you do it at home as per usual or get some sort of nice room for the day?</div>

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
				<a name="p43"></a>
				<b class="postauthor">tim</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-2784.php#p43"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Wed Oct 14, 2009 3:13 pm&nbsp;</div></td>
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
					
						<div class="postbody">Hi Grilgamesh, UtnapishTim here, get it? Epic reference, get it?<br /><br />Of course we did it at home, to suggest that we could achieve anything in a day is madness - it took forever AND a day, which is why there's no artwork. It was all done using Thom's homemade studio facilities at Dildano HQ, on Ubuntu, on Linux, on a computer, on the floor. <br /><br />We would play the songs with guitars in headphone amps and record the drums with 6 mics, often DI'ing the bass and using that take too. All guitars were then overdubbed using Thom's wonderful selection of microphones and then vox and synths were par-boiled and roasted in sumo-fat. We didn't do too much editing and used no software effects as Thom built his own compressor. It was a freaking pleasure and I'm looking forward to doing the next album, but I don't think we'll use Linux again. Oh yeah, and the interludes went out and back through a tape player for added subtractions.<br /><br />Perhaps we should have some sort of Artwork competition?</div>

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
				<a name="p44"></a>
				<b class="postauthor">Girugamesh</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-31239.php#p44"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Wed Oct 14, 2009 8:55 pm&nbsp;</div></td>
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
					
						<div class="postbody"><a href="http://encyclopediadramatica.com/Girugamesh" class="postlink">Girugamesh!</a></div>

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
				<a name="p53"></a>
				<b class="postauthor">grilgamesh</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-14801.php#p53"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Oct 16, 2009 2:24 pm&nbsp;</div></td>
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
					
						<div class="postbody">stop linking to forced memes...<br />obv i'm referring to the epic of <a href="http://en.wikipedia.org/wiki/Gilgamesh" class="postlink">gilgamesh</a>, an actually great story from 'ur'ly times, lol.</div>

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
				<a name="p57"></a>
				<b class="postauthor">bearblock</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-31061.php#p57"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Oct 16, 2009 6:32 pm&nbsp;</div></td>
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
					
						<div class="postbody">all these internet memes are just a case of Enki see, Enki du amirite lolol</div>

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
				<a name="p61"></a>
				<b class="postauthor">grilgamesh</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-19648.php#p61"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Mon Oct 19, 2009 7:33 pm&nbsp;</div></td>
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
					
						<div class="postbody">alol<br />no, actual alol</div>

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
				<a name="p77"></a>
				<b class="postauthor">vinegarmouse</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
									<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> Re: Artwork</div><div style="float: right;"><a href="viewtopic-7991.php#p77"><img src="styles/dildano/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sun Oct 25, 2009 11:22 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>
		
		<tr class="row2">
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
					
						<div class="postbody"><span style="color: #FF0000">I</span> <span style="color: #FF8040">done</span> <span style="color: #FFBF00">a</span> <span style="color: #FF8040">album </span>cover. <span style="color: #00BFBF">What</span> <span style="color: #8000FF">do </span>you <span style="color: #FF40BF">think? </span><span style="color: #0040BF">Paul</span> <span style="color: #BF8040">said I could </span>show <span style="color: #00BF80">everyone on the </span>computer <span style="color: #FF4040">if I wrote some </span>words <span style="color: #8040BF">in special </span><span style="color: #FF8080">brackets.</span> See below.<br /><br />[img]C:\Documents%20and%20Settings\Paul\My%20Documents\My%20Pictures\The%20Buzzard%20Maze.jpg[/img]</div>

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
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist-33964.php"><img src="styles/dildano/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;">&nbsp;</div></td>
			</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>
	<table width="100%" cellspacing="1" class="tablebg">
	<tr align="center">
		<td class="cat"><form name="viewtopic" method="post" action="./viewtopic.php?f=3&amp;t=8&amp;start=0"><span class="gensmall">Display posts from previous:</span> <select name="st" id="st"><option value="0" selected="selected">All posts</option><option value="1">1 day</option><option value="7">7 days</option><option value="14">2 weeks</option><option value="30">1 month</option><option value="90">3 months</option><option value="180">6 months</option><option value="365">1 year</option></select>&nbsp;<span class="gensmall">Sort by</span> <select name="sk" id="sk"><option value="a">Author</option><option value="t" selected="selected">Post time</option><option value="s">Subject</option></select> <select name="sd" id="sd"><option value="a" selected="selected">Ascending</option><option value="d">Descending</option></select>&nbsp;<input class="btnlite" type="submit" value="Go" name="sort" /></form></td>
	</tr>
	</table>
	
	<table width="100%" cellspacing="1">
	<tr>
		<td align="left" valign="middle" nowrap="nowrap">
		<a href="posting-55927.php"><img src="styles/dildano/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a>&nbsp;<a href="posting-8894.php"><img src="styles/dildano/imageset/en/button_topic_reply.gif" alt="Reply to topic" title="Reply to topic" /></a>		</td>
					<td class="nav" valign="middle" nowrap="nowrap">&nbsp;Page <strong>1</strong> of <strong>2</strong><br /></td>
			<td class="gensmall" nowrap="nowrap">&nbsp;[ 20 posts ]&nbsp;</td>
			<td class="gensmall" width="100%" align="right" nowrap="nowrap"><b><a href="#" onclick="jumpto(); return false;" title="Click to jump to page…">Go to page</a> <strong>1</strong><span class="page-sep">, </span><a href="viewtopic-35177.php">2</a> &nbsp;<a href="viewtopic-35177.php">Next</a></b></td>
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