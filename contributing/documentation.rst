#################################
Writing CodeIgniter Documentation
#################################

CodeIgniter uses Sphinx to generate its documentation in a variety of formats,
using reStructuredText to handle the formatting.  If you are familiar with
Markdown or Textile, you will quickly grasp reStructuredText.  The focus is
on readability and user friendliness.
While they can be quite technical, we always write for humans!

A local table of contents should always be included, like the one below.
It is created automatically by inserting the following::

    .. contents::
        :local:
        :depth: 2

.. contents::
  :local:

**************
Tools Required
**************

To see the rendered HTML, ePub, PDF, etc., you will need to install Sphinx
along with the PHP domain extension for Sphinx. The underlying requirement
is to have Python installed.

You can read more about installing all tools in /user_guide_src/README.rst

*****************************************
Page and Section Headings and Subheadings
*****************************************

Headings not only provide order and sections within a page, but they also
are used to automatically build both the page and document table of contents.
Headings are formed by using certain characters as underlines for a bit of
text.  Major headings, like page titles and section headings also use
overlines.  Other headings just use underlines, with the following hierarchy::

    # with overline for page titles
    * with overline for major sections
    = for subsections
    - for subsubsections
    ^ for subsubsubsections
    " for subsubsubsubsections (!)

The :download:`TextMate ELDocs Bundle <./ELDocs.tmbundle.zip>` can help you
create these with the following tab triggers::

    title->

        ##########
        Page Title
        ##########

    sec->

        *************
        Major Section
        *************

    sub->

        Subsection
        ==========

    sss->

        SubSubSection
        -------------

    ssss->

        SubSubSubSection
        ^^^^^^^^^^^^^^^^

    sssss->

        SubSubSubSubSection (!)
        """""""""""""""""""""""

**********
References
**********

To a Section
============

If you need to link to a specific section, the first you add the label before a header::

    .. _curlrequest-request-options-headers:

    headers
    =======

And then you can reference it like this::

    See :ref:`CURLRequest Class <curlrequest-request-options-headers>` for how to add.

    See :ref:`curlrequest-request-options-headers` for how to add.

To a Section in the Page
========================

You can reference a section in the current page like the following::

     See `Result Rows`_

To a Page
=========

You can reference a page like the following::

    See :doc:`Session <../libraries/sessions>` library

    See :doc:`../libraries/sessions` library

To a URL
========

    `CodeIgniter 4 framework <https://github.com/codeigniter4/framework>`_
