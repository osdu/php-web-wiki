# acl.auth.php
# <?php exit()?>
# Don't modify the lines above
#
# Access Control Lists
#
# Editing this file by hand shouldn't be necessary. Use the ACL
# Manager interface instead.
#
# If your auth backend allows special char like spaces in groups
# or user names you need to urlencode them (only chars <128, leave
# UTF-8 multibyte chars as is)
#
# none   0
# read   1
# edit   2
# create 4
# upload 8
# delete 16
################################################################################
*	@ALL	1
*	@phpcvs	16
*	@user	1
doc	@doc	2
doc:*	@doc	8
internals:windows	@wintendo	2
internals:windows:*	@wintendo	8
licenses:*	@ALL	0
licenses:*	@phpcvs	16
pear:*	@pear	8
phpng-upgrading	@php7upgrading	2
rfc	@rfc	2
rfc:*	@rfc	8
todo:*	@todo	8
usergroups	@usergroups	2
usergroups:*	@usergroups	8
vcs:*	@vcs	8
web:*	@web	8
