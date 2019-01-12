
@foreach($PhotoMenuLinks as $MainMenuLink)
<!-- Post Block Wrapper Start -->
<div class="post-block-wrapper mb-20">
    
    <!-- Post Block Head Start -->
    <div class="head">
        
        <!-- Title -->
        <h4 class="title">{{ $MainMenuLink->title_vi }}</h4>
        
    </div><!-- Post Block Head End -->
    
    <!-- Post Block Body Start -->
    <div class="body">
        
        <!-- Sidebar Post Slider Start -->
        <div class="sidebar-post-carousel post-block-carousel">

            @foreach ($MainMenuLink->webmasterSection->topics->where('status',1)->sortbyDesc('id')->take(5) as $Topic) 

            <?php
                if ($Topic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                        $topic_link_url = url(trans('backLang.code') . "/" . $Topic->$slug_var);
                    } else {
                        $topic_link_url = url($Topic->$slug_var);
                    }
                } else {
                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                        $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                    } else {
                        $topic_link_url = route('FrontendTopic', ["section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                    }
                }
            ?>

            <!-- Post Start -->
            <div class="post">
                <div class="post-wrap">

                    <!-- Image -->
                    <a class="image" href="{{  $topic_link_url }}">

                        @if ($Topic->photo_file != null && file_exists('uploads/thumbs/'.$Topic->photo_file))
                            <img src="uploads/thumbs/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}">
                        @else
                            <img src="frontEnd/httv/img/post/post-11.jpg" alt="{{ $Topic->$link_title_var}}">
                        @endif
                    </a>

                    <!-- Content -->
                    <div class="content">

                        <!-- Title -->
                        <h4 class="title" align="center"><a href="{{  $topic_link_url }}"> {{ $Topic->title_vi }}</a></h4>

                    </div>
                </div>
            </div><!-- Post End -->
            @endforeach

            

        </div><!-- Sidebar Post Slider End -->
    
    </div><!-- Post Block Body End -->
    
</div><!-- Post Block Wrapper End -->
@endforeach