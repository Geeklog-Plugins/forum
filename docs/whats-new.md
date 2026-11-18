# Forum topics in Geeklog What's New

Forum contributes recently active topics to Geeklog's standard What's New
block through the `plugin_whatsnewsupported_forum` and
`plugin_getwhatsnew_forum` Plugin API callbacks.

## Configuration

Two settings in `config.php` control this integration:

- `show_whatsnew`: set to `false` to disable Forum entries (default: `true`).
- `whatsnew_interval`: activity window in seconds (default: `2419200`, four weeks).

Only topic roots are listed, including older topics with recent replies. A
`[+N]` suffix counts replies made within the configured window. Links point
to the latest reply, or to the root post if there is no reply.

The list respects Forum registration requirements, the visitor's Geeklog
group membership, and the `no_newposts` and `is_hidden` forum settings.

## Manual verification (Geeklog 2.2.2 / PHP 8.3)

1. Create public and group-restricted forums, plus a hidden forum and one
   configured with `no_newposts`.
2. Create new topics, reply to older topics, and add multiple replies within
   the configured activity window.
3. Check the What's New block as an anonymous visitor, an authorized member,
   and a member without access. Restricted and hidden topic titles must never
   appear for unauthorized visitors.
4. Confirm that each eligible topic appears once, sorted by last activity,
   and that `[+N]` counts recent replies rather than all historical replies.
5. Follow a link to a reply on page two or later; it should open the correct
   page and anchor with either Forum post sort order.
6. Disable `show_whatsnew`, shorten `whatsnew_interval`, and enable
   `registration_required`. Confirm that the block responds accordingly.
