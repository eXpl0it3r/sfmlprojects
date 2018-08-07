# SFML Projects

While the SFML forum provides a section for [projects](http://en.sfml-dev.org/forums/index.php?board=10.0), it happens too often that nice projects get lost in the depth of that sub-forum or that the archive with the game gets deleted. With the [SFML Projects](http://www.sfmlprojects.org/) website we want to provide a platform to host, share and archive projects that were made with or for [SFML](http://www.sfml-dev.org/).

## Contribute

Since this project is open source, I very gladly take in contributions. You can do this by utilizing GitHub's ways of forking and creating pull requests or by joining the IRC channel #sfmlprojects on irc.boxbox.org and talk to me. I'll also hand out commit rights to people that seem eager to help an can follow these few rules:

* For every non-trivial change a pull request needs to be created, so I or others can review the changes.

## Local Development

### Download

```
git clone --recursive https://github.com/eXpl0it3r/sfmlprojects.git
```

### Configure

* Make sure the directories `content/` and `thumbs/` are writeable.
* Make sure the directories `assets/`, `content/` and `thumbs/` are readable.
* Change the variables in the `site/config/config.php.example` file and remove the `.example` extension.

That's basically it. From here on you can now start with the project files itself.

**Notice:** Kirby requires a license to officially run a website, but it can be used locally or on a test server without restrictions.

## Dependencies

### Back-end

* [Kirby Core](https://github.com/getkirby/kirby)
* [Kirby Panel](https://github.com/getkirby/panel)
* [Plugin: KRB](https://github.com/eXpl0it3r/kirby-krb)
* [Field: Previewfiles](https://github.com/brocessing/kirby-previewfiles)

### Front-end

* [Bootstrap](http://getbootstrap.com/)
* [Jasny Boostrap](http://jasny.github.io/bootstrap/)
* [Font Awesome](http://fontawesome.io/)
* [jQuery](http://jquery.com/)

## License

The software created for the website is under the MIT license, see LICENSE for details. The dependencies licenses can be found in the licenses directory.
