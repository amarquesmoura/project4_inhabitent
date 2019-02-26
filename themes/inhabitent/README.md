# Project 4 - Inhabitent

This is a project at RED Academy Web Developer Program to showcase the creation of a custom Wordpress theme, forked from Underscores. It also involved creating a plugin for a custom widget.

## Installation

### 1. Download me (don't clone me!)

Then add me to your `wp-content` directory.

### 2. Rename the `themes/inhabitent` directory

Give your theme an apropriate name.

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** to install the node modules you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so changew `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).

## Skills learned

- Installing webpack and dependencies
- Creating a webpack.config file to automate tasks
- Creating partials and exporting/importing from them
- Using classes and constructors
- Using arrow functions
- Using template strings
- Destructuring objects

## Main Takeaways

1 - JavaScript ES2015 brings many enhancements, especially ones that optimize Object Oriented Programing.

2 - Webpack creates a dinamic development environment since it doesn't require to build to disk everytime there is a change. Using a virtual server running on memory, the response on the browser is immediate.

3 - SVGs are a powerful way to add graphics and animations to a page, in a programatic form.

4 - For my stretch goal, I chose to make it possible playing the game on a mobile device. This was because my nephew was disapointed that he could not play the game on his cellphone when I shared the link with him. I learned how to use the deviceOrientation event as a controller.
