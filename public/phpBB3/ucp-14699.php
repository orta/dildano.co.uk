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
<title>DILDANO &bull; User Control Panel &bull; Privacy policy</title>

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
	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<th height="25">DILDANO - Privacy policy</th>
	</tr>
	<tr>
		<td class="row1" align="center">
			<table width="90%" cellspacing="2" cellpadding="2" border="0" align="center">
			<tr>
				<td>
					<span class="genmed"><br />This policy explains in detail how “DILDANO” along with its affiliated companies (hereinafter “we”, “us”, “our”, “DILDANO”, “http://www.dildano.com/phpBB3”) and phpBB (hereinafter “they”, “them”, “their”, “phpBB software”, “www.phpbb.com”, “phpBB Group”, “phpBB Teams”) use any information collected during any session of usage by you (hereinafter “your information”).<br />
	<br />
	Your information is collected via two ways. Firstly, by browsing “DILDANO” will cause the phpBB software to create a number of cookies, which are small text files that are downloaded on to your computer’s web browser temporary files. The first two cookies just contain a user identifier (hereinafter “user-id”) and an anonymous session identifier (hereinafter “session-id”), automatically assigned to you by the phpBB software. A third cookie will be created once you have browsed topics within “DILDANO” and is used to store which topics have been read, thereby improving your user experience.<br />
	<br />
	We may also create cookies external to the phpBB software whilst browsing “DILDANO”, though these are outside the scope of this document which is intended to only cover the pages created by the phpBB software. The second way in which we collect your information is by what you submit to us. This can be, and is not limited to: posting as an anonymous user (hereinafter “anonymous posts”), registering on “DILDANO” (hereinafter “your account”) and posts submitted by you after registration and whilst logged in (hereinafter “your posts”).<br />
	<br />
	Your account will at a bare minimum contain a uniquely identifiable name (hereinafter “your user name”), a personal password used for logging into your account (hereinafter “your password”) and a personal, valid e-mail address (hereinafter “your e-mail”). Your information for your account at “DILDANO” is protected by data-protection laws applicable in the country that hosts us. Any information beyond your user name, your password, and your e-mail address required by “DILDANO” during the registration process is either mandatory or optional, at the discretion of “DILDANO”. In all cases, you have the option of what information in your account is publicly displayed. Furthermore, within your account, you have the option to opt-in or opt-out of automatically generated e-mails from the phpBB software.<br />
	<br />
	Your password is ciphered (a one-way hash) so that it is secure. However, it is recommended that you do not reuse the same password across a number of different websites. Your password is the means of accessing your account at “DILDANO”, so please guard it carefully and under no circumstance will anyone affiliated with “DILDANO”, phpBB or another 3rd party, legitimately ask you for your password. Should you forget your password for your account, you can use the “I forgot my password” feature provided by the phpBB software. This process will ask you to submit your user name and your e-mail, then the phpBB software will generate a new password to reclaim your account.<br />
	<br /><br /></span>
					<div align="center">
						<a href="ucp-46864.php">Back to login screen</a>
					</div>
				</td>
			</tr>
			</table>
		</td>
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