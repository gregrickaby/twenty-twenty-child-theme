# Twenty Twenty Child

## Features

-   [@wordpress/scripts](https://github.com/WordPress/gutenberg/tree/master/packages/scripts)
-   Code Highlighting with [Prism.js](https://prismjs.com/download.html)
-   Core Web Vitals metrics with [web-vitals](https://github.com/GoogleChrome/web-vitals/)

## Install

Clone the repo into `wp-content/themes` and install the dependencies:

```bash
git@github.com:gregrickaby/twenty-twenty-child-theme.git
```

```bash
cd themes/twentytwenty-child
```

```bash
npm install
```

Make sure you have the Twenty Twenty theme installed, and then activate the Twenty Twenty Child.

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
1. Write your code
1. In the sidebar, click "Advanced".
1. Insert the following CSS classes:

**Language classes**

-   `language-bash`
-   `language-css`
-   `language-graphql`
-   `language-html`
-   `language-js`
-   `language-json`
-   `language-jsx`
-   `language-php`
-   `language-scss`

**Helper classes**

-   `line-numbers`
-   `match-braces`

### PrismJS Config

PrismJS depends on a Babel plugin for [setup and configuration](https://prismjs.com/download.html#). See the `.babelrc` file for options.

-   [See supported languages](https://prismjs.com/#supported-languages)
-   [See available plugins](https://prismjs.com/#plugins)
-   [Helpful blog post](https://betterstack.dev/blog/code-highlighting-in-react-using-prismjs/)
