treetrunkwiseyoga.com
=====================

Summary
-------

Modified Colorlabs theme for treetrunkwiseyoga.com

Modifications
-------------

### Front page

- Bottom columns are completely wrapped in `<a/>`, not just the image.

### Other

- Removed breadcrumbs
- Removed comment sections
- Modified Author signatures
- See [ttwyoga-colorway.patch](https://github.com/coopy/treetrunkwiseyoga.com/blob/ttwyoga-colorway-2.5.2/ttwyoga-colorway.patch)
  for full diff.

Branching Strategy
------------------

```
     ____________     Modified source (long-living branch).
    /        /
   /        /         Merge to `modified` to upgrade underlying theme.
__/________/_________ Master: Latest unadultered source from Theme author.
v1.0   v1.1

```
