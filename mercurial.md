
# Mercurial

Create repo:

    $ mkdir project
    $ hg init project

Clone repo:

    $ hg clone project-repo project-local

See revision currently checked out:

    $ hg summary

View summary of every 'commit' (called a changeset in Hg):

    $ hg log [-v]

See what changes are going into the commit:

    $ hg status

See the actual changes:

    $ hg diff

Discard changes:

    $ hg revert foo.txt

Commit the changes:

    $ hg commit

Push the changes to the remote repository:

    $ hg push

Pull all changes in remote repository not yet in the local working directory: