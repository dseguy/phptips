# Configuration file for the Sphinx documentation builder.
#
# This file only contains a selection of the most common options. For a full
# list see the documentation:
# https://www.sphinx-doc.org/en/master/usage/configuration.html

# -- Path setup --------------------------------------------------------------

# If extensions (or modules to document with autodoc) are in another directory,
# add these directories to sys.path here. If the directory is relative to the
# documentation root, use os.path.abspath to make it absolute, like shown here.
#
# import os
# import sys
# sys.path.insert(0, os.path.abspath('.'))


# -- Project information -----------------------------------------------------

project = 'PHP tips and tricks'
copyright = '2023-2026, Damien Seguy - <a href="https://www.exakat.io/">Exakat</a>'
author = 'Damien Seguy'
html_favicon = '_static/logo.png'

# The full version, including alpha/beta/rc tags
release = '1.311'


# -- General configuration ---------------------------------------------------

# Add any Sphinx extension module names here, as strings. They can be
# extensions coming with Sphinx (named 'sphinx.ext.*') or your custom
# ones.
extensions = [
]

# Add any paths that contain templates here, relative to this directory.
templates_path = ['_templates']

# List of patterns, relative to source directory, that match files and
# directories to ignore when looking for source files.
# This pattern also affects html_static_path and html_extra_path.
exclude_patterns = ['_build', 'Thumbs.db', '.DS_Store']


# -- Options for HTML output -------------------------------------------------

# The theme to use for HTML and HTML Help pages.  See the documentation for
# a list of builtin themes.
#
html_theme = 'furo'

# Add any paths that contain custom static files (such as style sheets) here,
# relative to this directory. They are copied after the builtin static files,
# so a file named "default.css" will overwrite the builtin "default.css".
html_static_path = ['_static']g

# Extra config to verify read the docs
html_extra_path = ["googlee919cb0917e4fefc.html", 
                   "sitemap.xml",
                   "BingSiteAuth.xml",
                   "robots.txt",
                   "ec729cf1d44543b7bd7bdeaec0a56fef.txt",
                   "feed.rss",
                  ]

# Only displays the title of the page
html_title = '';

html_theme_options = {
    'light_logo': 'logo.png',
    'dark_logo': 'logo.png',
    'source_repository': 'https://codeberg.org/exakat/PHP-tips/',
    'source_branch': 'main',
    'source_directory': '',
}

html_js_files = [
    'js/custom.js',
    'https://www.googletagmanager.com/gtag/js?id=G-29LCZ34CDW',
    '<!-- 100% privacy-first analytics --><script async src="https://scripts.simpleanalyticscdn.com/latest.js"></script>'
]

source_view_link = 'https://codeberg.org/exakat/PHP-tips';