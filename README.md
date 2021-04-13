<!-- markdownlint-disable MD013 -->

# Twenty Twenty Child

## Features

1. [@wordpress/scripts](https://github.com/WordPress/gutenberg/tree/master/packages/scripts)
2. Code Highlighting with [Prism.js](https://prismjs.com/download.html)

## Get The Child Theme

### Clone Theme

The first step is getting the child theme into `wp-content/themes`. There are two options:

**Git:**

```bash
git clone git@github.com:gregrickaby/twenty-twenty-child-theme.git
```

**Download** [the zip](https://github.com/gregrickaby/twenty-twenty-child-theme/archive/main.zip) and place into `wp-content/themes`

### Install

Next, you'll need to change directories into the child theme, and install dependencies:

```bash
cd themes/twentytwenty-child
```

```bash
npm install
```

```bash
composer install
```

### Activate

Finally, you'll need to activate the child theme:

1. Make sure you have the Twenty Twenty theme installed
2. Activate the Twenty Twenty Child theme

## Development

To have @wordpress/scripts watch for changes:

```bash
npm run start
```

To lint scripts and styles:

```bash
npm run lint
```

To build production ready assets:

```bash
npm run build
```

## Code Highlighting

### Workflow

1. Insert a code block into the editor (/code)
2. Write your code
3. In the sidebar, click "Advanced".
4. Insert the following CSS classes:

### Language classes

-   `language-bash`
-   `language-css`
-   `language-graphql`
-   `language-html`
-   `language-js`
-   `language-json`
-   `language-jsx`
-   `language-php`
-   `language-scss`

### Helper classes

-   `line-numbers`
-   `match-braces`

### PrismJS Config

PrismJS depends on a Babel plugin for [setup and configuration](https://prismjs.com/download.html#). See the `.babelrc` file for options.

-   [See supported languages](https://prismjs.com/#supported-languages)
-   [See available plugins](https://prismjs.com/#plugins)
-   [Helpful blog post](https://betterstack.dev/blog/code-highlighting-in-react-using-prismjs/)
