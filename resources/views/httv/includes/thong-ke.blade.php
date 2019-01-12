<div class="post-block-wrapper mb-15">
                                
    <!-- Post Block Head Start -->
    <div class="head businsee-head bg-dark">
        
        <!-- Title -->
        <h4 class="title"><a href="javascript:void(0)">Thống kê</a></h4>
        
    </div><!-- Post Block Head End -->
        
    <!-- Post Block Body Start -->
    <div class="body pb-0">

        <div class="row">
                    
            

            <!-- Small Post Wrapper Start -->
            <div class="col-12 mb-15" style="padding: 0 20px">

                

                <!-- Post Small Start -->
                <div class="post post-small post-list feature-post post-separator-border">
                    <div class="post-wrap">

                        <!-- Content -->
                        <div class="content">

                                <table style="text-align:left; font-size:0.9em; margin-bottom: 5px;">
                                        <tr>
                                            <td>Số lượt truy cập hôm nay: &emsp;</td>
                                            <th>
                                                <span class="number-tnb-blue">
                                                    {{ number_format($TodayVisitors) }}
                                                </span>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>Số lượt xem trang hôm nay: &emsp;</td>
                                            <th>
                                                <span class="number-tnb-red">
                                                    {{ number_format($TodayPages) }}
                                                </span>
                                            </th>
                                        </tr>
                                    </table>
                        
                                    <table style="text-align:left; font-size:0.9em">
                                            
                                            <tr>
                                                <td>Tổng lượt truy cập: &emsp;</td>
                                                <th>
                                                    <span class="number-tnb-blue">
                                                        {{ number_format($Visitors) }}
                                                    </span>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>Tổng lượt xem trang: &emsp;</td>
                                                <th>
                                                    <span class="number-tnb-red">
                                                        {{ number_format($Pages) }}
                                                    </span>
                                                </th>
                                            </tr>
                                        </table>

                        </div>
                        
                    </div>
                </div><!-- Post Small End -->

                    
            </div><!-- Small Post Wrapper End -->

        </div>
                    
    </div><!-- Post Block Body End -->

</div><!-- Post Block Wrapper End -->