# Project 4 - Inhabitent

This is a project at RED Academy Web Developer Program to showcase the creation of a custom Wordpress theme, forked from Underscores. It also involved creating a plugin for a custom widget.

## Installation

### 1. Download me (don't clone me!)

Then add me to your `wp-content` directory.

### 2. Rename the `themes/inhabitent` directory

Give your theme an appropriate name.

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** to install the node modules you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).

## Skills learned

- Installing Wordpress
- Installing plugins in Wordpress
- Using themes in Wordpress
- Customizing a Wordpress theme
- Using action and filter hooks in Wordpress
- Creating a plugin for Wordpress:
  I created a plugin to add a widget to the sidebar, where the user can update the business hours of his store, as seen in the image below.

  ![Business Hours Widget](screenshots/business_hours_widget.png)

## Main Takeaways

1 - Wordpress is a powerful CMS that allows you to create complex websites that are relatively easy to be updated by an end user.

2 - It is very important to understand the Wordpress Template Taxonomy in order to customize it.

3 - In a complex project like this, Sass features like nesting, mixins and variables become really important.

4 - I learnt the usage of :not in CSS in order to create rules exceptions.

5 - I practiced the use of grids to organize elements in table-like fashion.

6 -I appreciate the ability to mix PHP and HTML code in a .php file. This allows me to create pages with dynamic content and minimal hard coding.
