<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        @include('layouts.head')
        <script type="application/ld+json">
            {
                "@context": "https://schema.org"
                , "@type": "Organization"
                , "name": "شركة رايتو للحلول البرمجية"
                , "alternateName": "شركة رايتو للبرمجيات والأنظمة المحاسبية"
                , "url": "https://raitotec.com/"
                , "logo": "https://raitotec.com/image/logo.png"
                , "contactPoint": {
                    "@type": "ContactPoint"
                    , "telephone": "+966538499438"
                    , "contactType": "customer service"
                    , "areaServed": ["SA", "EG"]
                    , "availableLanguage": ["en", "Arabic"]
                }
                , "sameAs": [
                    "https://www.facebook.com/Raitotec"
                    , "https://twitter.com/raitotec"
                    , "https://www.instagram.com/raitotec1/"
                ]
            }

        </script>
    </head>
    <body>
        @auth
            @include('layouts.main-header')
            @include('layouts.main-sidebar')
        @endauth

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">
                <!-- validationNotify -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                
                <!-- success Notify -->
                @if (session()->has('success'))
                <script id="successNotify">
                    window.onload = function() {
                        notif({
                            msg: "تمت العملية بنجاح"
                            , type: "success"
                        })
                    }
                </script>
                <div class="alert alert-success">
                    تمت العملية بنجاح
                </div>
                @endif


                <!-- error Notify -->
                @if (session()->has('error'))
                <script id="errorNotify">
                    window.onload = function() {
                        notif({
                            msg: "لقد حدث خطأ.. برجاء المحاولة مرة أخرى!"
                            , type: "error"
                        })
                    }
                </script>
                <div class="alert alert-danger">
                    لقد حدث خطأ.. برجاء المحاولة مرة أخرى!
                </div>
                @endif


                <!-- canNotDeleted Notify -->
                @if (session()->has('canNotDeleted'))
                <script id="canNotDeleted">
                    window.onload = function() {
                        notif({
                            msg: "لا يمكن الحذف لوجود بيانات أخرى مرتبطة بها..!"
                            , type: "error"
                        })
                    }
                </script>
                <div class="alert alert-danger">
                    لا يمكن الحذف لوجود بيانات أخرى مرتبطة بها..!
                </div>
                @endif


                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">{{ trans('main.Blogs') }}</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">{{ trans('main.Dashboard') }}</a></li>
                                <li class="breadcrumb-item active">{{ trans('main.Blogs') }}</li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('dashboard-blog.index') }}" type="button" class="btn btn-primary me-2" id="filter_search">
                                {{ trans('main.Back') }}
                                <i class="fas fa-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <!--start fetch data-->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('dashboard-blog.update', 'test') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                    {{ method_field('patch') }}
                                    @csrf
                                    <!--first_title_ar-->
                                    <div class="form-group">
                                        <label>{{ trans('main.First Title') }} {{ trans('main.In Arabic') }}</label>
                                        <input type="text" class="form-control" name="first_title_ar" value="{{ $blog->first_title_ar }}" placeholder="{{ trans('main.First Title') }} {{ trans('main.In Arabic') }}">
                                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                                    </div>
                                    <!--first_content_ar-->
                                    <div class="form-group">
                                        <label>{{ trans('main.First Content') }} {{ trans('main.In Arabic') }}</label>
                                        <textarea class="ckeditor form-control" id="editor_update_first_content_ar" placeholder="{{trans('main.First Content') }} {{ trans('main.In Arabic') }}" rows="5" name="first_content_ar">{{ $blog->first_content_ar }}</textarea>
                                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                                    </div>
                                    <!--first_title_en-->
                                    <div class="form-group">
                                        <label>{{ trans('main.First Title') }} {{ trans('main.In English') }}</label>
                                        <input type="text" class="form-control" name="first_title_en" value="{{ $blog->first_title_en }}" placeholder="{{ trans('main.First Title') }} {{ trans('main.In English') }}">
                                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                                    </div>
                                    <!--first_content_en-->
                                    <div class="form-group">
                                        <label>{{ trans('main.First Content') }} {{ trans('main.In English') }}</label>
                                        <textarea class="ckeditor form-control" id="editor_update_first_content_en" placeholder="{{trans('main.First Content') }} {{ trans('main.In English') }}" rows="5" name="first_content_en">{{ $blog->first_content_en }}</textarea>
                                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                                    </div>
                                    <!--second_title_ar-->
                                    <div class="form-group">
                                        <label>{{ trans('main.Second Title') }} {{ trans('main.In Arabic') }}</label>
                                        <input type="text" class="form-control" name="second_title_ar" value="{{ $blog->second_title_ar }}" placeholder="{{ trans('main.First Title') }} {{ trans('main.In Arabic') }}">
                                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                                    </div>
                                    <!--second_content_ar-->
                                    <div class="form-group">
                                        <label>{{ trans('main.Second Content') }} {{ trans('main.In Arabic') }}</label>
                                        <textarea class="ckeditor form-control" id="editor_update_second_content_ar" placeholder="{{trans('main.Second Content') }} {{ trans('main.In Arabic') }}" rows="5" name="second_content_ar">{{ $blog->second_content_ar }}</textarea>
                                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                                    </div>
                                    <!--second_title_en-->
                                    <div class="form-group">
                                        <label>{{ trans('main.Second Title') }} {{ trans('main.In English') }}</label>
                                        <input type="text" class="form-control" name="second_title_en" value="{{ $blog->second_title_en }}" placeholder="{{ trans('main.Second Title') }} {{ trans('main.In English') }}">
                                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                                    </div>
                                    <!--second_content_en-->
                                    <div class="form-group">
                                        <label>{{ trans('main.Second Content') }} {{ trans('main.In English') }}</label>
                                        <textarea class="ckeditor form-control" id="editor_update_second_content_en" placeholder="{{trans('main.Second Content') }} {{ trans('main.In English') }}" rows="5" name="second_content_en">{{ $blog->second_content_en }}</textarea>
                                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                                    </div>
                                    <!--meta_description-->
                                    <div class="form-group">
                                        <label>{{ trans('main.Meta Description') }}</label>
                                        <input type="text" class="form-control" name="meta_description" value="{{ $blog->meta_description }}" placeholder="{{ trans('main.Meta Description') }}">
                                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                                    </div>
                                    <!--photo-->
                                    <div class="form-group">
                                        <label>{{ trans('main.Photo') }} :</label>
                                        <input class="form-control" type="file" name="photo" accept="image/*" data-height="70" value="{{ $blog->photo }}" />
                                        @if($blog->photo)
                                        <div class="row">
                                            <div class="col-12">
                                                <img loading="lazy" class="img-thumbnail m-1" src="{{ asset('public/attachments/blog/'.$blog->photo) }}" alt="{{ $blog->photo }}" style="max-width:200px; max-height:200px; !important">
                                            </div>
                                        </div>
                                        @endif
                                        <!-- id -->
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="id" value="{{ $blog->id }}">
                                        </div>
                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">{{ trans('main.Confirm') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end fetch data-->
                </div>
            </div>
        </div>
    

        @include('layouts.footer')
        <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/super-build/ckeditor.js"></script>
        <script>
            CKEDITOR.ClassicEditor.create(document.getElementById("editor_update_first_content_ar"), {
                toolbar: {
                    items: [
                        'exportPDF', 'exportWord', '|'
                        , 'findAndReplace', 'selectAll', '|'
                        , 'heading', '|'
                        , 'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|'
                        , 'bulletedList', 'numberedList', 'todoList', '|'
                        , 'outdent', 'indent', '|'
                        , 'undo', 'redo'
                        , '-'
                        , 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|'
                        , 'alignment', '|'
                        , 'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|'
                        , 'specialCharacters', 'horizontalLine', 'pageBreak', '|'
                        , 'textPartLanguage', '|'
                        , 'sourceEditing'
                    ]
                    , shouldNotGroupWhenFull: true
                },
                list: {
                    properties: {
                        styles: true
                        , startIndex: true
                        , reversed: true
                    }
                },
                heading: {
                    options: [{
                            model: 'paragraph'
                            , title: 'Paragraph'
                            , class: 'ck-heading_paragraph'
                        }
                        , {
                            model: 'heading1'
                            , view: 'h1'
                            , title: 'Heading 1'
                            , class: 'ck-heading_heading1'
                        }
                        , {
                            model: 'heading2'
                            , view: 'h2'
                            , title: 'Heading 2'
                            , class: 'ck-heading_heading2'
                        }
                        , {
                            model: 'heading3'
                            , view: 'h3'
                            , title: 'Heading 3'
                            , class: 'ck-heading_heading3'
                        }
                        , {
                            model: 'heading4'
                            , view: 'h4'
                            , title: 'Heading 4'
                            , class: 'ck-heading_heading4'
                        }
                        , {
                            model: 'heading5'
                            , view: 'h5'
                            , title: 'Heading 5'
                            , class: 'ck-heading_heading5'
                        }
                        , {
                            model: 'heading6'
                            , view: 'h6'
                            , title: 'Heading 6'
                            , class: 'ck-heading_heading6'
                        }
                    ]
                },
                placeholder: 'Enter Content Here',
                fontFamily: {
                    options: [
                        'default'
                        , 'Arial, Helvetica, sans-serif'
                        , 'Courier New, Courier, monospace'
                        , 'Georgia, serif'
                        , 'Lucida Sans Unicode, Lucida Grande, sans-serif'
                        , 'Tahoma, Geneva, sans-serif'
                        , 'Times New Roman, Times, serif'
                        , 'Trebuchet MS, Helvetica, sans-serif'
                        , 'Verdana, Geneva, sans-serif'
                    ]
                    , supportAllValues: true
                },
                fontSize: {
                    options: [10, 12, 14, 'default', 18, 20, 22]
                    , supportAllValues: true
                },
                htmlSupport: {
                    allow: [{
                        name: /.*/
                        , attributes: true
                        , classes: true
                        , styles: true
                    }]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true
                        , defaultProtocol: 'https://'
                        , toggleDownloadable: {
                            mode: 'manual'
                            , label: 'Downloadable'
                            , attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                mention: {
                    feeds: [{
                        marker: '@'
                        , feed: [
                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream'
                            , '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o'
                            , '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé'
                            , '@sugar', '@sweet', '@topping', '@wafer'
                        ]
                        , minimumCharacters: 1
                    }]
                },
                removePlugins: [
                    // 'ExportPdf',
                    // 'ExportWord',
                    'AIAssistant'
                    , 'CKBox'
                    , 'CKFinder'
                    , 'EasyImage',
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                    // 'Base64UploadAdapter',
                    'RealTimeCollaborativeComments'
                    , 'RealTimeCollaborativeTrackChanges'
                    , 'RealTimeCollaborativeRevisionHistory'
                    , 'PresenceList'
                    , 'Comments'
                    , 'TrackChanges'
                    , 'TrackChangesData'
                    , 'RevisionHistory'
                    , 'Pagination'
                    , 'WProofreader',
                    'MathType',
                    'SlashCommand'
                    , 'Template'
                    , 'DocumentOutline'
                    , 'FormatPainter'
                    , 'TableOfContents'
                    , 'PasteFromOfficeEnhanced'
                ]
            });
        </script>

        <script>
            CKEDITOR.ClassicEditor.create(document.getElementById("editor_update_first_content_en"), {
                toolbar: {
                    items: [
                        'exportPDF', 'exportWord', '|'
                        , 'findAndReplace', 'selectAll', '|'
                        , 'heading', '|'
                        , 'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|'
                        , 'bulletedList', 'numberedList', 'todoList', '|'
                        , 'outdent', 'indent', '|'
                        , 'undo', 'redo'
                        , '-'
                        , 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|'
                        , 'alignment', '|'
                        , 'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|'
                        , 'specialCharacters', 'horizontalLine', 'pageBreak', '|'
                        , 'textPartLanguage', '|'
                        , 'sourceEditing'
                    ]
                    , shouldNotGroupWhenFull: true
                },
                list: {
                    properties: {
                        styles: true
                        , startIndex: true
                        , reversed: true
                    }
                },
                heading: {
                    options: [{
                            model: 'paragraph'
                            , title: 'Paragraph'
                            , class: 'ck-heading_paragraph'
                        }
                        , {
                            model: 'heading1'
                            , view: 'h1'
                            , title: 'Heading 1'
                            , class: 'ck-heading_heading1'
                        }
                        , {
                            model: 'heading2'
                            , view: 'h2'
                            , title: 'Heading 2'
                            , class: 'ck-heading_heading2'
                        }
                        , {
                            model: 'heading3'
                            , view: 'h3'
                            , title: 'Heading 3'
                            , class: 'ck-heading_heading3'
                        }
                        , {
                            model: 'heading4'
                            , view: 'h4'
                            , title: 'Heading 4'
                            , class: 'ck-heading_heading4'
                        }
                        , {
                            model: 'heading5'
                            , view: 'h5'
                            , title: 'Heading 5'
                            , class: 'ck-heading_heading5'
                        }
                        , {
                            model: 'heading6'
                            , view: 'h6'
                            , title: 'Heading 6'
                            , class: 'ck-heading_heading6'
                        }
                    ]
                },
                placeholder: 'Enter Content Here',
                fontFamily: {
                    options: [
                        'default'
                        , 'Arial, Helvetica, sans-serif'
                        , 'Courier New, Courier, monospace'
                        , 'Georgia, serif'
                        , 'Lucida Sans Unicode, Lucida Grande, sans-serif'
                        , 'Tahoma, Geneva, sans-serif'
                        , 'Times New Roman, Times, serif'
                        , 'Trebuchet MS, Helvetica, sans-serif'
                        , 'Verdana, Geneva, sans-serif'
                    ]
                    , supportAllValues: true
                },
                fontSize: {
                    options: [10, 12, 14, 'default', 18, 20, 22]
                    , supportAllValues: true
                },
                htmlSupport: {
                    allow: [{
                        name: /.*/
                        , attributes: true
                        , classes: true
                        , styles: true
                    }]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true
                        , defaultProtocol: 'https://'
                        , toggleDownloadable: {
                            mode: 'manual'
                            , label: 'Downloadable'
                            , attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                mention: {
                    feeds: [{
                        marker: '@'
                        , feed: [
                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream'
                            , '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o'
                            , '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé'
                            , '@sugar', '@sweet', '@topping', '@wafer'
                        ]
                        , minimumCharacters: 1
                    }]
                },
                removePlugins: [
                    // 'ExportPdf',
                    // 'ExportWord',
                    'AIAssistant'
                    , 'CKBox'
                    , 'CKFinder'
                    , 'EasyImage',
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                    // 'Base64UploadAdapter',
                    'RealTimeCollaborativeComments'
                    , 'RealTimeCollaborativeTrackChanges'
                    , 'RealTimeCollaborativeRevisionHistory'
                    , 'PresenceList'
                    , 'Comments'
                    , 'TrackChanges'
                    , 'TrackChangesData'
                    , 'RevisionHistory'
                    , 'Pagination'
                    , 'WProofreader',
                    'MathType',
                    'SlashCommand'
                    , 'Template'
                    , 'DocumentOutline'
                    , 'FormatPainter'
                    , 'TableOfContents'
                    , 'PasteFromOfficeEnhanced'
                ]
            });
        </script>

        <script>
            CKEDITOR.ClassicEditor.create(document.getElementById("editor_update_second_content_ar"), {
                toolbar: {
                    items: [
                        'exportPDF', 'exportWord', '|'
                        , 'findAndReplace', 'selectAll', '|'
                        , 'heading', '|'
                        , 'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|'
                        , 'bulletedList', 'numberedList', 'todoList', '|'
                        , 'outdent', 'indent', '|'
                        , 'undo', 'redo'
                        , '-'
                        , 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|'
                        , 'alignment', '|'
                        , 'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|'
                        , 'specialCharacters', 'horizontalLine', 'pageBreak', '|'
                        , 'textPartLanguage', '|'
                        , 'sourceEditing'
                    ]
                    , shouldNotGroupWhenFull: true
                },
                list: {
                    properties: {
                        styles: true
                        , startIndex: true
                        , reversed: true
                    }
                },
                heading: {
                    options: [{
                            model: 'paragraph'
                            , title: 'Paragraph'
                            , class: 'ck-heading_paragraph'
                        }
                        , {
                            model: 'heading1'
                            , view: 'h1'
                            , title: 'Heading 1'
                            , class: 'ck-heading_heading1'
                        }
                        , {
                            model: 'heading2'
                            , view: 'h2'
                            , title: 'Heading 2'
                            , class: 'ck-heading_heading2'
                        }
                        , {
                            model: 'heading3'
                            , view: 'h3'
                            , title: 'Heading 3'
                            , class: 'ck-heading_heading3'
                        }
                        , {
                            model: 'heading4'
                            , view: 'h4'
                            , title: 'Heading 4'
                            , class: 'ck-heading_heading4'
                        }
                        , {
                            model: 'heading5'
                            , view: 'h5'
                            , title: 'Heading 5'
                            , class: 'ck-heading_heading5'
                        }
                        , {
                            model: 'heading6'
                            , view: 'h6'
                            , title: 'Heading 6'
                            , class: 'ck-heading_heading6'
                        }
                    ]
                },
                placeholder: 'Enter Content Here',
                fontFamily: {
                    options: [
                        'default'
                        , 'Arial, Helvetica, sans-serif'
                        , 'Courier New, Courier, monospace'
                        , 'Georgia, serif'
                        , 'Lucida Sans Unicode, Lucida Grande, sans-serif'
                        , 'Tahoma, Geneva, sans-serif'
                        , 'Times New Roman, Times, serif'
                        , 'Trebuchet MS, Helvetica, sans-serif'
                        , 'Verdana, Geneva, sans-serif'
                    ]
                    , supportAllValues: true
                },
                fontSize: {
                    options: [10, 12, 14, 'default', 18, 20, 22]
                    , supportAllValues: true
                },
                htmlSupport: {
                    allow: [{
                        name: /.*/
                        , attributes: true
                        , classes: true
                        , styles: true
                    }]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true
                        , defaultProtocol: 'https://'
                        , toggleDownloadable: {
                            mode: 'manual'
                            , label: 'Downloadable'
                            , attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                mention: {
                    feeds: [{
                        marker: '@'
                        , feed: [
                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream'
                            , '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o'
                            , '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé'
                            , '@sugar', '@sweet', '@topping', '@wafer'
                        ]
                        , minimumCharacters: 1
                    }]
                },
                removePlugins: [
                    // 'ExportPdf',
                    // 'ExportWord',
                    'AIAssistant'
                    , 'CKBox'
                    , 'CKFinder'
                    , 'EasyImage',
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                    // 'Base64UploadAdapter',
                    'RealTimeCollaborativeComments'
                    , 'RealTimeCollaborativeTrackChanges'
                    , 'RealTimeCollaborativeRevisionHistory'
                    , 'PresenceList'
                    , 'Comments'
                    , 'TrackChanges'
                    , 'TrackChangesData'
                    , 'RevisionHistory'
                    , 'Pagination'
                    , 'WProofreader',
                    'MathType',
                    'SlashCommand'
                    , 'Template'
                    , 'DocumentOutline'
                    , 'FormatPainter'
                    , 'TableOfContents'
                    , 'PasteFromOfficeEnhanced'
                ]
            });
        </script>

        <script>
            CKEDITOR.ClassicEditor.create(document.getElementById("editor_update_second_content_en"), {
                toolbar: {
                    items: [
                        'exportPDF', 'exportWord', '|'
                        , 'findAndReplace', 'selectAll', '|'
                        , 'heading', '|'
                        , 'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|'
                        , 'bulletedList', 'numberedList', 'todoList', '|'
                        , 'outdent', 'indent', '|'
                        , 'undo', 'redo'
                        , '-'
                        , 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|'
                        , 'alignment', '|'
                        , 'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|'
                        , 'specialCharacters', 'horizontalLine', 'pageBreak', '|'
                        , 'textPartLanguage', '|'
                        , 'sourceEditing'
                    ]
                    , shouldNotGroupWhenFull: true
                },
                list: {
                    properties: {
                        styles: true
                        , startIndex: true
                        , reversed: true
                    }
                },
                heading: {
                    options: [{
                            model: 'paragraph'
                            , title: 'Paragraph'
                            , class: 'ck-heading_paragraph'
                        }
                        , {
                            model: 'heading1'
                            , view: 'h1'
                            , title: 'Heading 1'
                            , class: 'ck-heading_heading1'
                        }
                        , {
                            model: 'heading2'
                            , view: 'h2'
                            , title: 'Heading 2'
                            , class: 'ck-heading_heading2'
                        }
                        , {
                            model: 'heading3'
                            , view: 'h3'
                            , title: 'Heading 3'
                            , class: 'ck-heading_heading3'
                        }
                        , {
                            model: 'heading4'
                            , view: 'h4'
                            , title: 'Heading 4'
                            , class: 'ck-heading_heading4'
                        }
                        , {
                            model: 'heading5'
                            , view: 'h5'
                            , title: 'Heading 5'
                            , class: 'ck-heading_heading5'
                        }
                        , {
                            model: 'heading6'
                            , view: 'h6'
                            , title: 'Heading 6'
                            , class: 'ck-heading_heading6'
                        }
                    ]
                },
                placeholder: 'Enter Content Here',
                fontFamily: {
                    options: [
                        'default'
                        , 'Arial, Helvetica, sans-serif'
                        , 'Courier New, Courier, monospace'
                        , 'Georgia, serif'
                        , 'Lucida Sans Unicode, Lucida Grande, sans-serif'
                        , 'Tahoma, Geneva, sans-serif'
                        , 'Times New Roman, Times, serif'
                        , 'Trebuchet MS, Helvetica, sans-serif'
                        , 'Verdana, Geneva, sans-serif'
                    ]
                    , supportAllValues: true
                },
                fontSize: {
                    options: [10, 12, 14, 'default', 18, 20, 22]
                    , supportAllValues: true
                },
                htmlSupport: {
                    allow: [{
                        name: /.*/
                        , attributes: true
                        , classes: true
                        , styles: true
                    }]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true
                        , defaultProtocol: 'https://'
                        , toggleDownloadable: {
                            mode: 'manual'
                            , label: 'Downloadable'
                            , attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                mention: {
                    feeds: [{
                        marker: '@'
                        , feed: [
                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream'
                            , '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o'
                            , '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé'
                            , '@sugar', '@sweet', '@topping', '@wafer'
                        ]
                        , minimumCharacters: 1
                    }]
                },
                removePlugins: [
                    // 'ExportPdf',
                    // 'ExportWord',
                    'AIAssistant'
                    , 'CKBox'
                    , 'CKFinder'
                    , 'EasyImage',
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                    // 'Base64UploadAdapter',
                    'RealTimeCollaborativeComments'
                    , 'RealTimeCollaborativeTrackChanges'
                    , 'RealTimeCollaborativeRevisionHistory'
                    , 'PresenceList'
                    , 'Comments'
                    , 'TrackChanges'
                    , 'TrackChangesData'
                    , 'RevisionHistory'
                    , 'Pagination'
                    , 'WProofreader',
                    'MathType',
                    'SlashCommand'
                    , 'Template'
                    , 'DocumentOutline'
                    , 'FormatPainter'
                    , 'TableOfContents'
                    , 'PasteFromOfficeEnhanced'
                ]
            });
        </script>




        <!--Internal  Notify js -->
        <script src="{{ URL::asset('public/assets_admin/plugins/notify/js/notifIt.js') }}"></script>
        <script src="{{ URL::asset('public/assets_admin/plugins/notify/js/notifit-custom.js') }}"></script>

        <!-- Sweet-alert js  -->
        <script src="{{URL::asset('public/assets_admin/js/sweet-alert.js')}}"></script>
        <script src="{{URL::asset('public/assets_admin/plugins/sweet-alert/sweetalert.min.js')}}"></script>
        <script src="{{URL::asset('public/assets_admin/plugins/sweet-alert/jquery.sweet-alert.js')}}"></script>
    </body>
</html>
