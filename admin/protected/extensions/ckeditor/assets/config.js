/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserImageBrowseUrl = '/filemanager/index.php?editor=ckeditor&filter=image';
	config.filebrowserBrowseUrl = '/filemanager/index.php?editor=ckeditor';
	config.filebrowserFlashBrowseUrl = '/filemanager/index.php?editor=ckeditor&filter=flash';
	
	config.toolbar_Basic =
	[
		['Bold', 'Italic', '-', 'NumberedList', 'BulletedList','-', 'Link','Unlink']
	];
    config.toolbar_Basiccolor =
    [
        ['Bold', 'Italic', '-','TextColor','-', 'Link','Unlink']
    ];
    config.toolbar_Basicnolink =
    [
        ['Bold', 'Italic', '-','TextColor']
    ];
	config.toolbar_Image =
	[
		{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
        { name: 'paragraph',   items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
        { name: 'links',       items : [ 'Link','Unlink','Anchor' ] },
        { name: 'insert',      items : [ 'Image','Table','HorizontalRule','Smiley','SpecialChar','PageBreak' ] },
	];
    config.toolbar_Video =
    [
        ['Bold', 'Italic', '-','TextColor','-','Table','Smiley','Maximize']
    ];
    config.toolbar_Wall =
    [
        ['Bold', 'Italic', '-','Link','Unlink', '-' ,'Smiley']
    ];
    config.toolbar_Full =
    [
        { name: 'document',    items : [ 'Preview','Print' ] },
        { name: 'clipboard',   items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
        { name: 'editing',     items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
        '/',
        { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
        { name: 'paragraph',   items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
        { name: 'links',       items : [ 'Link','Unlink','Anchor' ] },
        { name: 'insert',      items : [ 'Image','Table','HorizontalRule','Smiley','SpecialChar','PageBreak' ] },
        '/',
        { name: 'styles',      items : [ 'Styles','Format','Font','FontSize' ] },
        { name: 'colors',      items : [ 'TextColor','BGColor' ] },
        { name: 'tools',       items : [ 'Maximize', 'ShowBlocks' ] }
    ];
};
