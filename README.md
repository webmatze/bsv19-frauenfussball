# Static Site Builder for BSV19 Frauenfussball website

This is a WIP. I exported the contents of the site from webflow.com and want to build it using my own tooling.

The site is generated using a simple Ruby script that processes `.erb` templates and builds a static website. It also copies essential assets like CSS, JS, and images to the build directory.

## Installation

To get started with the static site builder, clone the repository:

```bash
git clone https://github.com/webmatze/bsv19-frauenfussball.git
cd bsv19-frauenfussball
```

Ensure you have Ruby installed on your machine. You can check this by running:

```bash
ruby -v
```

If not use [asdf](https://asdf-vm.com/) to install it:

```bash
asdf install ruby
```

## Usage

1. Place your `.erb` templates in the root directory.
2. Organize your assets in `css`, `js`, and `images` directories.
3. Run the script:

```bash
ruby build.rb
```

After execution, the processed `.html` files and the asset directories will be available in the `build/` directory.

## Features

- **ERB Processing**: Converts `.erb` templates into `.html` files.
- **Asset Copying**: Automatically copies `css`, `js`, and `images` directories to the build directory.

## Contributing

Pull requests are welcome. If you have suggestions or encounter issues, please open an issue first to discuss the proposed changes.

## License

[MIT](https://choosealicense.com/licenses/mit/)
