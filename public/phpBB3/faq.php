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
<title>DILDANO &bull; Frequently Asked Questions</title>

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
	<br />
<a name="faqtop"></a>

<div id="pagecontent">

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<th>Frequently Asked Questions</th>
	</tr>
	<tr>
		<td class="row1">
					<span class="gen"><b>Login and Registration Issues</b></span><br />
							<span class="gen"><a class="postlink" href="#f0r0">Why can’t I login?</a></span><br />
							<span class="gen"><a class="postlink" href="#f0r1">Why do I need to register at all?</a></span><br />
							<span class="gen"><a class="postlink" href="#f0r2">Why do I get logged off automatically?</a></span><br />
							<span class="gen"><a class="postlink" href="#f0r3">How do I prevent my username appearing in the online user listings?</a></span><br />
							<span class="gen"><a class="postlink" href="#f0r4">I’ve lost my password!</a></span><br />
							<span class="gen"><a class="postlink" href="#f0r5">I registered but cannot login!</a></span><br />
							<span class="gen"><a class="postlink" href="#f0r6">I registered in the past but cannot login any more?!</a></span><br />
							<span class="gen"><a class="postlink" href="#f0r7">What is COPPA?</a></span><br />
							<span class="gen"><a class="postlink" href="#f0r8">Why can’t I register?</a></span><br />
							<span class="gen"><a class="postlink" href="#f0r9">What does the “Delete all board cookies” do?</a></span><br />
						<br />
					<span class="gen"><b>User Preferences and settings</b></span><br />
							<span class="gen"><a class="postlink" href="#f1r0">How do I change my settings?</a></span><br />
							<span class="gen"><a class="postlink" href="#f1r1">The times are not correct!</a></span><br />
							<span class="gen"><a class="postlink" href="#f1r2">I changed the timezone and the time is still wrong!</a></span><br />
							<span class="gen"><a class="postlink" href="#f1r3">My language is not in the list!</a></span><br />
							<span class="gen"><a class="postlink" href="#f1r4">How do I show an image below my username?</a></span><br />
							<span class="gen"><a class="postlink" href="#f1r5">What is my rank and how do I change it?</a></span><br />
							<span class="gen"><a class="postlink" href="#f1r6">When I click the e-mail link for a user it asks me to login?</a></span><br />
						<br />
					<span class="gen"><b>Posting Issues</b></span><br />
							<span class="gen"><a class="postlink" href="#f2r0">How do I post a topic in a forum?</a></span><br />
							<span class="gen"><a class="postlink" href="#f2r1">How do I edit or delete a post?</a></span><br />
							<span class="gen"><a class="postlink" href="#f2r2">How do I add a signature to my post?</a></span><br />
							<span class="gen"><a class="postlink" href="#f2r3">How do I create a poll?</a></span><br />
							<span class="gen"><a class="postlink" href="#f2r4">Why can’t I add more poll options?</a></span><br />
							<span class="gen"><a class="postlink" href="#f2r5">How do I edit or delete a poll?</a></span><br />
							<span class="gen"><a class="postlink" href="#f2r6">Why can’t I access a forum?</a></span><br />
							<span class="gen"><a class="postlink" href="#f2r7">Why can’t I add attachments?</a></span><br />
							<span class="gen"><a class="postlink" href="#f2r8">Why did I receive a warning?</a></span><br />
							<span class="gen"><a class="postlink" href="#f2r9">How can I report posts to a moderator?</a></span><br />
							<span class="gen"><a class="postlink" href="#f2r10">What is the “Save” button for in topic posting?</a></span><br />
							<span class="gen"><a class="postlink" href="#f2r11">Why does my post need to be approved?</a></span><br />
							<span class="gen"><a class="postlink" href="#f2r12">How do I bump my topic?</a></span><br />
						<br />
					<span class="gen"><b>Formatting and Topic Types</b></span><br />
							<span class="gen"><a class="postlink" href="#f3r0">What is BBCode?</a></span><br />
							<span class="gen"><a class="postlink" href="#f3r1">Can I use HTML?</a></span><br />
							<span class="gen"><a class="postlink" href="#f3r2">What are Smilies?</a></span><br />
							<span class="gen"><a class="postlink" href="#f3r3">Can I post images?</a></span><br />
							<span class="gen"><a class="postlink" href="#f3r4">What are global announcements?</a></span><br />
							<span class="gen"><a class="postlink" href="#f3r5">What are announcements?</a></span><br />
							<span class="gen"><a class="postlink" href="#f3r6">What are sticky topics?</a></span><br />
							<span class="gen"><a class="postlink" href="#f3r7">What are locked topics?</a></span><br />
							<span class="gen"><a class="postlink" href="#f3r8">What are topic icons?</a></span><br />
						<br />
					<span class="gen"><b>User Levels and Groups</b></span><br />
							<span class="gen"><a class="postlink" href="#f4r0">What are Administrators?</a></span><br />
							<span class="gen"><a class="postlink" href="#f4r1">What are Moderators?</a></span><br />
							<span class="gen"><a class="postlink" href="#f4r2">What are usergroups?</a></span><br />
							<span class="gen"><a class="postlink" href="#f4r3">Where are the usergroups and how do I join one?</a></span><br />
							<span class="gen"><a class="postlink" href="#f4r4">How do I become a usergroup leader?</a></span><br />
							<span class="gen"><a class="postlink" href="#f4r5">Why do some usergroups appear in a different colour?</a></span><br />
							<span class="gen"><a class="postlink" href="#f4r6">What is a “Default usergroup”?</a></span><br />
							<span class="gen"><a class="postlink" href="#f4r7">What is “The team” link?</a></span><br />
						<br />
					<span class="gen"><b>Private Messaging</b></span><br />
							<span class="gen"><a class="postlink" href="#f5r0">I cannot send private messages!</a></span><br />
							<span class="gen"><a class="postlink" href="#f5r1">I keep getting unwanted private messages!</a></span><br />
							<span class="gen"><a class="postlink" href="#f5r2">I have received a spamming or abusive e-mail from someone on this board!</a></span><br />
						<br />
					<span class="gen"><b>Friends and Foes</b></span><br />
							<span class="gen"><a class="postlink" href="#f6r0">What are my Friends and Foes lists?</a></span><br />
							<span class="gen"><a class="postlink" href="#f6r1">How can I add / remove users to my Friends or Foes list?</a></span><br />
						<br />
					<span class="gen"><b>Searching the Forums</b></span><br />
							<span class="gen"><a class="postlink" href="#f7r0">How can I search a forum or forums?</a></span><br />
							<span class="gen"><a class="postlink" href="#f7r1">Why does my search return no results?</a></span><br />
							<span class="gen"><a class="postlink" href="#f7r2">Why does my search return a blank page!?</a></span><br />
							<span class="gen"><a class="postlink" href="#f7r3">How do I search for members?</a></span><br />
							<span class="gen"><a class="postlink" href="#f7r4">How can I find my own posts and topics?</a></span><br />
						<br />
					<span class="gen"><b>Topic Subscriptions and Bookmarks</b></span><br />
							<span class="gen"><a class="postlink" href="#f8r0">What is the difference between bookmarking and subscribing?</a></span><br />
							<span class="gen"><a class="postlink" href="#f8r1">How do I subscribe to specific forums or topics?</a></span><br />
							<span class="gen"><a class="postlink" href="#f8r2">How do I remove my subscriptions?</a></span><br />
						<br />
					<span class="gen"><b>Attachments</b></span><br />
							<span class="gen"><a class="postlink" href="#f9r0">What attachments are allowed on this board?</a></span><br />
							<span class="gen"><a class="postlink" href="#f9r1">How do I find all my attachments?</a></span><br />
						<br />
					<span class="gen"><b>phpBB 3 Issues</b></span><br />
							<span class="gen"><a class="postlink" href="#f10r0">Who wrote this bulletin board?</a></span><br />
							<span class="gen"><a class="postlink" href="#f10r1">Why isn’t X feature available?</a></span><br />
							<span class="gen"><a class="postlink" href="#f10r2">Who do I contact about abusive and/or legal matters related to this board?</a></span><br />
						<br />
				</td>
	</tr>
	<tr>
		<td class="cat">&nbsp;</td>
	</tr>
	</table>

	<br clear="all" />

			<table class="tablebg" width="100%" cellspacing="1">
		<tr> 
			<td class="cat" align="center"><h4>Login and Registration Issues</h4></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f0r0"></a><b>&#187; Why can’t I login?</b></div>
				<div class="postbody">There are several reasons why this could occur. First, ensure your username and password are correct. If they are, contact the board owner to make sure you haven’t been banned. It is also possible the website owner has a configuration error on their end, and they would need to fix it.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f0r1"></a><b>&#187; Why do I need to register at all?</b></div>
				<div class="postbody">You may not have to, it is up to the administrator of the board as to whether you need to register in order to post messages. However; registration will give you access to additional features not available to guest users such as definable avatar images, private messaging, emailing of fellow users, usergroup subscription, etc. It only takes a few moments to register so it is recommended you do so.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f0r2"></a><b>&#187; Why do I get logged off automatically?</b></div>
				<div class="postbody">If you do not check the <em>Log me in automatically</em> box when you login, the board will only keep you logged in for a preset time. This prevents misuse of your account by anyone else. To stay logged in, check the box during login. This is not recommended if you access the board from a shared computer, e.g. library, internet cafe, university computer lab, etc. If you do not see this checkbox, it means the board administrator has disabled this feature.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f0r3"></a><b>&#187; How do I prevent my username appearing in the online user listings?</b></div>
				<div class="postbody">Within your User Control Panel, under “Board preferences”, you will find the option <em>Hide your online status</em>. Enable this option with <samp>Yes</samp> and you will only appear to the administrators, moderators and yourself. You will be counted as a hidden user.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f0r4"></a><b>&#187; I’ve lost my password!</b></div>
				<div class="postbody">Don’t panic! While your password cannot be retrieved, it can easily be reset. Visit the login page and click <em>I’ve forgotten my password</em>. Follow the instructions and you should be able to log in again shortly.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f0r5"></a><b>&#187; I registered but cannot login!</b></div>
				<div class="postbody">First, check your username and password. If they are correct, then one of two things may have happened. If COPPA support is enabled and you specified being under 13 years old during registration, you will have to follow the instructions you received. Some boards will also require new registrations to be activated, either by yourself or by an administrator before you can logon; this information was present during registration. If you were sent an e-mail, follow the instructions. If you did not receive an e-mail, you may have provided an incorrect e-mail address or the e-mail may have been picked up by a spam filer. If you are sure the e-mail address you provided is correct, try contacting an administrator.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f0r6"></a><b>&#187; I registered in the past but cannot login any more?!</b></div>
				<div class="postbody">Attempt to locate the e-mail sent to you when you first registered, check your username and password and try again. It is possible an administrator has deactivated or deleted your account for some reason. Also, many boards periodically remove users who have not posted for a long time to reduce the size of the database. If this has happened, try registering again and being more involved in discussions.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f0r7"></a><b>&#187; What is COPPA?</b></div>
				<div class="postbody">COPPA, or the Child Online Privacy and Protection Act of 1998, is a law in the United States requiring websites which can potentially collect information from minors under the age of 13 to have written parental consent or some other method of legal guardian acknowledgment, allowing the collection of personally identifiable information from a minor under the age of 13. If you are unsure if this applies to you as someone trying to register or to the website you are trying to register on, contact legal counsel for assistance. Please note that the phpBB Group cannot provide legal advice and is not a point of contact for legal concerns of any kind, except as outlined below.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f0r8"></a><b>&#187; Why can’t I register?</b></div>
				<div class="postbody">It is possible the website owner has banned your IP address or disallowed the username you are attempting to register. The website owner could have also disabled registration to prevent new visitors from signing up. Contact a board administrator for assistance.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f0r9"></a><b>&#187; What does the “Delete all board cookies” do?</b></div>
				<div class="postbody">“Delete all board cookies” deletes the cookies created by phpBB which keep you authenticated and logged into the board. It also provides functions such as read tracking if they have been enabled by the board owner. If you are having login or logout problems, deleting board cookies may help.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr> 
			<td class="cat" align="center"><h4>User Preferences and settings</h4></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f1r0"></a><b>&#187; How do I change my settings?</b></div>
				<div class="postbody">If you are a registered user, all your settings are stored in the board database. To alter them, visit your User Control Panel; a link can usually be found at the top of board pages. This system will allow you to change all your settings and preferences.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f1r1"></a><b>&#187; The times are not correct!</b></div>
				<div class="postbody">It is possible the time displayed is from a timezone different from the one you are in. If this is the case, visit your User Control Panel and change your timezone to match your particular area, e.g. London, Paris, New York, Sydney, etc. Please note that changing the timezone, like most settings, can only be done by registered users. If you are not registered, this is a good time to do so.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f1r2"></a><b>&#187; I changed the timezone and the time is still wrong!</b></div>
				<div class="postbody">If you are sure you have set the timezone and Summer Time/DST correctly and the time is still incorrect, then the time stored on the server clock is incorrect. Please notify an administrator to correct the problem.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f1r3"></a><b>&#187; My language is not in the list!</b></div>
				<div class="postbody">Either the administrator has not installed your language or nobody has translated this board into your language. Try asking the board administrator if they can install the language pack you need. If the language pack does not exist, feel free to create a new translation. More information can be found at the phpBB website (see link at the bottom of board pages).</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f1r4"></a><b>&#187; How do I show an image below my username?</b></div>
				<div class="postbody">There are two images that may appear below a username when viewing posts. Depending on the used style, the first may be an image associated with your rank, generally in the form of stars, blocks or dots, indicating how many posts you have made or your status on the board. The second, usually a larger image, is known as an avatar and is generally unique or personal to each user. It is up to the board administrator to enable avatars and to choose the way in which avatars can be made available. If you are unable to use avatars, contact a board administrator and ask them for their reasons.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f1r5"></a><b>&#187; What is my rank and how do I change it?</b></div>
				<div class="postbody">Ranks, which appear below your username, indicate the number of posts you have made or identify certain users, e.g. moderators and administrators. In general, you cannot directly change the wording of any board ranks as they are set by the board administrator. Please do not abuse the board by posting unnecessarily just to increase your rank. Most boards will not tolerate this and the moderator or administrator will simply lower your post count.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f1r6"></a><b>&#187; When I click the e-mail link for a user it asks me to login?</b></div>
				<div class="postbody">Only registered users can send e-mail to other users via the built-in e-mail form, and only if the administrator has enabled this feature. This is to prevent malicious use of the e-mail system by anonymous users.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr> 
			<td class="cat" align="center"><h4>Posting Issues</h4></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f2r0"></a><b>&#187; How do I post a topic in a forum?</b></div>
				<div class="postbody">To post a new topic in a forum, click the relevant button on either the forum or topic screens. You may need to register before you can post a message. A list of your permissions in each forum is available at the bottom of the forum and topic screens. Example: You can post new topics, You can vote in polls, etc.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f2r1"></a><b>&#187; How do I edit or delete a post?</b></div>
				<div class="postbody">Unless you are a board administrator or moderator, you can only edit or delete your own posts. You can edit a post by clicking the edit button for the relevant post, sometimes for only a limited time after the post was made. If someone has already replied to the post, you will find a small piece of text output below the post when you return to the topic which lists the number of times you edited it along with the date and time. This will only appear if someone has made a reply; it will not appear if a moderator or administrator edited the post, though they may leave a note as to why they’ve edited the post at their own digression. Please note that normal users cannot delete a post once someone has replied.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f2r2"></a><b>&#187; How do I add a signature to my post?</b></div>
				<div class="postbody">To add a signature to a post you must first create one via your User Control Panel. Once created, you can check the <em>Attach a signature</em> box on the posting form to add your signature. You can also add a signature by default to all your posts by checking the appropriate radio button in your profile. If you do so, you can still prevent a signature being added to individual posts by un-checking the add signature box within the posting form.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f2r3"></a><b>&#187; How do I create a poll?</b></div>
				<div class="postbody">When posting a new topic or editing the first post of a topic, click the “Poll creation” tab below the main posting form; if you cannot see this, you do not have appropriate permissions to create polls. Enter a title and at least two options in the appropriate fields, making sure each option is on a separate line in the textarea. You can also set the number of options users may select during voting under “Options per user”, a time limit in days for the poll (0 for infinite duration) and lastly the option to allow users to amend their votes.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f2r4"></a><b>&#187; Why can’t I add more poll options?</b></div>
				<div class="postbody">The limit for poll options is set by the board administrator. If you feel you need to add more options to your poll then the allowed amount, contact the board administrator.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f2r5"></a><b>&#187; How do I edit or delete a poll?</b></div>
				<div class="postbody">As with posts, polls can only be edited by the original poster, a moderator or an administrator. To edit a poll, click to edit the first post in the topic; this always has the poll associated with it. If no one has cast a vote, users can delete the poll or edit any poll option. However, if members have already placed votes, only moderators or administrators can edit or delete it. This prevents the poll’s options from being changed mid-way through a poll.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f2r6"></a><b>&#187; Why can’t I access a forum?</b></div>
				<div class="postbody">Some forums may be limited to certain users or groups. To view, read, post or perform another action you may need special permissions. Contact a moderator or board administrator to grant you access.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f2r7"></a><b>&#187; Why can’t I add attachments?</b></div>
				<div class="postbody">Attachment permissions are granted on a per forum, per group, or per user basis. The board administrator may not have allowed attachments to be added for the specific forum you are posting in, or perhaps only certain groups can post attachments. Contact the board administrator if you are unsure about why you are unable to add attachments.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f2r8"></a><b>&#187; Why did I receive a warning?</b></div>
				<div class="postbody">Each board administrator has their own set of rules for their site. If you have broken a rule, you may be issued a warning. Please note that this is the board administrator’s decision, and the phpBB Group has nothing to do with the warnings on the given site. Contact the board administrator if you are unsure about why you were issued a warning.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f2r9"></a><b>&#187; How can I report posts to a moderator?</b></div>
				<div class="postbody">If the board administrator has allowed it, you should see a button for reporting posts next to the post you wish to report. Clicking this will walk you through the steps necessary to report the post.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f2r10"></a><b>&#187; What is the “Save” button for in topic posting?</b></div>
				<div class="postbody">This allows you to save passages to be completed and submitted at a later date. To reload a saved passage, visit the User Control Panel.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f2r11"></a><b>&#187; Why does my post need to be approved?</b></div>
				<div class="postbody">The board administrator may have decided that posts in the forum you are posting to require review before submission. It is also possible that the administrator has placed you in a group of users whose posts require review before submission. Please contact the board administrator for further details.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f2r12"></a><b>&#187; How do I bump my topic?</b></div>
				<div class="postbody">By clicking the “Bump topic” link when you are viewing it, you can “bump” the topic to the top of the forum on the first page. However, if you do not see this, then topic bumping may be disabled or the time allowance between bumps has not yet been reached. It is also possible to bump the topic simply by replying to it, however, be sure to follow the board rules when doing so.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr> 
			<td class="cat" align="center"><h4>Formatting and Topic Types</h4></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f3r0"></a><b>&#187; What is BBCode?</b></div>
				<div class="postbody">BBCode is a special implementation of HTML, offering great formatting control on particular objects in a post. The use of BBCode is granted by the administrator, but it can also be disabled on a per post basis from the posting form. BBCode itself is similar in style to HTML, but tags are enclosed in square brackets [ and ] rather than &lt; and &gt;. For more information on BBCode see the guide which can be accessed from the posting page.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f3r1"></a><b>&#187; Can I use HTML?</b></div>
				<div class="postbody">No. It is not possible to post HTML on this board and have it rendered as HTML. Most formatting which can be carried out using HTML can be applied using BBCode instead.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f3r2"></a><b>&#187; What are Smilies?</b></div>
				<div class="postbody">Smilies, or Emoticons, are small images which can be used to express a feeling using a short code, e.g. :) denotes happy, while :( denotes sad. The full list of emoticons can be seen in the posting form. Try not to overuse smilies, however, as they can quickly render a post unreadable and a moderator may edit them out or remove the post altogether. The board administrator may also have set a limit to the number of smilies you may use within a post.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f3r3"></a><b>&#187; Can I post images?</b></div>
				<div class="postbody">Yes, images can be shown in your posts. If the administrator has allowed attachments, you may be able to upload the image to the board. Otherwise, you must link to an image stored on a publicly accessible web server, e.g. http://www.example.com/my-picture.gif. You cannot link to pictures stored on your own PC (unless it is a publicly accessible server) nor images stored behind authentication mechanisms, e.g. hotmail or yahoo mailboxes, password protected sites, etc. To display the image use the BBCode [img] tag.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f3r4"></a><b>&#187; What are global announcements?</b></div>
				<div class="postbody">Global announcements contain important information and you should read them whenever possible. They will appear at the top of every forum and within your User Control Panel. Global announcement permissions are granted by the board administrator.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f3r5"></a><b>&#187; What are announcements?</b></div>
				<div class="postbody">Announcements often contain important information for the forum you are currently reading and you should read them whenever possible. Announcements appear at the top of every page in the forum to which they are posted. As with global announcements, announcement permissions are granted by the board administrator.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f3r6"></a><b>&#187; What are sticky topics?</b></div>
				<div class="postbody">Sticky topics within the forum appear below announcements and only on the first page. They are often quite important so you should read them whenever possible. As with announcements and global announcements, sticky topic permissions are granted by the board administrator.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f3r7"></a><b>&#187; What are locked topics?</b></div>
				<div class="postbody">Locked topics are topics where users can no longer reply and any poll it contained was automatically ended. Topics may be locked for many reasons and were set this way by either the forum moderator or board administrator. You may also be able to lock your own topics depending on the permissions you are granted by the board administrator.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f3r8"></a><b>&#187; What are topic icons?</b></div>
				<div class="postbody">Topic icons are author chosen images associated with posts to indicate their content. The ability to use topic icons depends on the permissions set by the board administrator.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr> 
			<td class="cat" align="center"><h4>User Levels and Groups</h4></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f4r0"></a><b>&#187; What are Administrators?</b></div>
				<div class="postbody">Administrators are members assigned with the highest level of control over the entire board. These members can control all facets of board operation, including setting permissions, banning users, creating usergroups or moderators, etc., dependent upon the board founder and what permissions he or she has given the other administrators. They may also have full moderator capabilities in all forums, depending on the settings put forth by the board founder.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f4r1"></a><b>&#187; What are Moderators?</b></div>
				<div class="postbody">Moderators are individuals (or groups of individuals) who look after the forums from day to day. They have the authority to edit or delete posts and lock, unlock, move, delete and split topics in the forum they moderate. Generally, moderators are present to prevent users from going off-topic or posting abusive or offensive material.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f4r2"></a><b>&#187; What are usergroups?</b></div>
				<div class="postbody">Usergroups are groups of users that divide the community into manageable sections board administrators can work with. Each user can belong to several groups and each group can be assigned individual permissions. This provides an easy way for administrators to change permissions for many users at once, such as changing moderator permissions or granting users access to a private forum.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f4r3"></a><b>&#187; Where are the usergroups and how do I join one?</b></div>
				<div class="postbody">You can view all usergroups via the “Usergroups” link within your User Control Panel. If you would like to join one, proceed by clicking the appropriate button. Not all groups have open access, however. Some may require approval to join, some may be closed and some may even have hidden memberships. If the group is open, you can join it by clicking the appropriate button. If a group requires approval to join you may request to join by clicking the appropriate button. The user group leader will need to approve your request and may ask why you want to join the group. Please do not harass a group leader if they reject your request; they will have their reasons.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f4r4"></a><b>&#187; How do I become a usergroup leader?</b></div>
				<div class="postbody">A usergroup leader is usually assigned when usergroups are initially created by a board administrator. If you are interested in creating a usergroup, your first point of contact should be an administrator; try sending a private message.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f4r5"></a><b>&#187; Why do some usergroups appear in a different colour?</b></div>
				<div class="postbody">It is possible for the board administrator to assign a colour to the members of a usergroup to make it easy to identify the members of this group.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f4r6"></a><b>&#187; What is a “Default usergroup”?</b></div>
				<div class="postbody">If you are a member of more than one usergroup, your default is used to determine which group colour and group rank should be shown for you by default. The board administrator may grant you permission to change your default usergroup via your User Control Panel.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f4r7"></a><b>&#187; What is “The team” link?</b></div>
				<div class="postbody">This page provides you with a list of board staff, including board administrators and moderators and other details such as the forums they moderate.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr> 
			<td class="cat" align="center"><h4>Private Messaging</h4></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f5r0"></a><b>&#187; I cannot send private messages!</b></div>
				<div class="postbody">There are three reasons for this; you are not registered and/or not logged on, the board administrator has disabled private messaging for the entire board, or the board administrator has prevented you from sending messages. Contact a board administrator for more information.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f5r1"></a><b>&#187; I keep getting unwanted private messages!</b></div>
				<div class="postbody">You can block a user from sending you private messages by using message rules within your User Control Panel. If you are receiving abusive private messages from a particular user, inform a board administrator; they have the power to prevent a user from sending private messages.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f5r2"></a><b>&#187; I have received a spamming or abusive e-mail from someone on this board!</b></div>
				<div class="postbody">We are sorry to hear that. The e-mail form feature of this board includes safeguards to try and track users who send such posts, so e-mail the board administrator with a full copy of the e-mail you received. It is very important that this includes the headers that contain the details of the user that sent the e-mail. The board administrator can then take action.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr> 
			<td class="cat" align="center"><h4>Friends and Foes</h4></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f6r0"></a><b>&#187; What are my Friends and Foes lists?</b></div>
				<div class="postbody">You can use these lists to organise other members of the board. Members added to your friends list will be listed within your User Control Panel for quick access to see their online status and to send them private messages. Subject to template support, posts from these users may also be highlighted. If you add a user to your foes list, any posts they make will be hidden by default.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f6r1"></a><b>&#187; How can I add / remove users to my Friends or Foes list?</b></div>
				<div class="postbody">You can add users to your list in two ways. Within each user’s profile, there is a link to add them to either your Friend or Foe list. Alternatively, from your User Control Panel, you can directly add users by entering their member name. You may also remove users from your list using the same page.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr> 
			<td class="cat" align="center"><h4>Searching the Forums</h4></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f7r0"></a><b>&#187; How can I search a forum or forums?</b></div>
				<div class="postbody">Enter a search term in the search box located on the index, forum or topic pages. Advanced search can be accessed by clicking the “Advance Search” link which is available on all pages on the forum. How to access the search may depend on the style used.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f7r1"></a><b>&#187; Why does my search return no results?</b></div>
				<div class="postbody">Your search was probably too vague and included many common terms which are not indexed by phpBB3. Be more specific and use the options available within Advanced search.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f7r2"></a><b>&#187; Why does my search return a blank page!?</b></div>
				<div class="postbody">Your search returned too many results for the webserver to handle. Use “Advanced search” and be more specific in the terms used and forums that are to be searched.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f7r3"></a><b>&#187; How do I search for members?</b></div>
				<div class="postbody">Visit to the “Members” page and click the “Find a member” link.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f7r4"></a><b>&#187; How can I find my own posts and topics?</b></div>
				<div class="postbody">Your own posts can be retrieved either by clicking the “Search user’s posts” within the User Control Panel or via your own profile page. To search for your topics, use the Advanced search page and fill in the various options appropriately.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr> 
			<td class="cat" align="center"><h4>Topic Subscriptions and Bookmarks</h4></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f8r0"></a><b>&#187; What is the difference between bookmarking and subscribing?</b></div>
				<div class="postbody">Bookmarking in phpBB3 is much like bookmarking in your web browser. You aren’t alerted when there’s an update, but you can come back to the topic later. Subscribing, however, will notify you when there is an update to the topic or forum on the board via your preferred method or methods.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f8r1"></a><b>&#187; How do I subscribe to specific forums or topics?</b></div>
				<div class="postbody">To subscribe to a specific forum, click the “Subscribe forum” link upon entering the forum. To subscribe to a topic, reply to the topic with the subscribe checkbox checked or click the “Subscribe topic” link within the topic itself.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f8r2"></a><b>&#187; How do I remove my subscriptions?</b></div>
				<div class="postbody">To remove your subscriptions, go to your User Control Panel and follow the links to your subscriptions.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr> 
			<td class="cat" align="center"><h4>Attachments</h4></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f9r0"></a><b>&#187; What attachments are allowed on this board?</b></div>
				<div class="postbody">Each board administrator can allow or disallow certain attachment types. If you are unsure what is allowed to be uploaded, contact the board administrator for assistance.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f9r1"></a><b>&#187; How do I find all my attachments?</b></div>
				<div class="postbody">To find your list of attachments that you have uploaded, go to your User Control Panel and follow the links to the attachments section.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr> 
			<td class="cat" align="center"><h4>phpBB 3 Issues</h4></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f10r0"></a><b>&#187; Who wrote this bulletin board?</b></div>
				<div class="postbody">This software (in its unmodified form) is produced, released and is copyright <a href="http://www.phpbb.com/">phpBB Group</a>. It is made available under the GNU General Public License and may be freely distributed. See the link for more details.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f10r1"></a><b>&#187; Why isn’t X feature available?</b></div>
				<div class="postbody">This software was written by and licensed through phpBB Group. If you believe a feature needs to be added, please visit the phpbb.com website and see what phpBB Group have to say. Please do not post feature requests to the board at phpbb.com, the group uses SourceForge to handle tasking of new features. Please read through the forums and see what, if any, our position may already be for a feature and then follow the procedure given there.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
		 
		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f10r2"></a><b>&#187; Who do I contact about abusive and/or legal matters related to this board?</b></div>
				<div class="postbody">Any of the administrators listed on the “The team” page should be an appropriate point of contact for your complaints. If this still gets no response then you should contact the owner of the domain (do a <a href="http://www.google.com/search?q=whois">whois lookup</a>) or, if this is running on a free service (e.g. Yahoo!, free.fr, f2s.com, etc.), the management or abuse department of that service. Please note that the phpBB Group has <strong>absolutely no jurisdiction</strong> and cannot in any way be held liable over how, where or by whom this board is used. Do not contact the phpBB Group in relation to any legal (cease and desist, liable, defamatory comment, etc.) matter <strong>not directly related</strong> to the phpBB.com website or the discrete software of phpBB itself. If you do e-mail phpBB Group <strong>about any third party</strong> use of this software then you should expect a terse response or no response at all.</div>
				<p class="gensmall"><a href="#faqtop">Top</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
	
</div>

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