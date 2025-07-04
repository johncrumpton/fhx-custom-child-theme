<?php
$ep_functions = new Eventprime_Basic_Functions;
$ep_requests = new EP_Requests;
?>
<?php if( ! empty( $events_data ) && ! empty( $events_data['post'] ) ) {?>
        <div class="ep-main-container ep-position-relative ep-box-wrap">
            <?php do_action( 'ep_before_single_event_contant');?>
            <?php
            // Load image template
            $image_file_path = $ep_requests->eventprime_get_ep_theme('event/image');
            include $image_file_path;
            ?>
            <!-- Event Loader -->
            <?php do_action( 'ep_add_loader_section' );?>
            <?php
            
           
            // Load result template
            $result_file_path = $ep_requests->eventprime_get_ep_theme('event/result');
            include $result_file_path;
            
            ?>
            <div class="ep-box-row ep-gx-5 padding--s">
                <div class="ep-box-col-8" id="ep-sl-left-area">
                    <div class="ep-box-row">
                        <?php
                      
                        // Load title template
                        $title_file_path = $ep_requests->eventprime_get_ep_theme('event/title');
                        include $title_file_path;

                        // Load date time template
                        $datetime_file_path = $ep_requests->eventprime_get_ep_theme('event/date-time');
                        include $datetime_file_path;
                        
                        // Load venue template
                        // $venue_file_path = $ep_requests->eventprime_get_ep_theme('event/venue');
                        // include $venue_file_path;
                        
                        // Load organizers template
                        $organizers_file_path = $ep_requests->eventprime_get_ep_theme('event/organizers');
                        include $organizers_file_path;
                        
                        // Load performers template
                        $performers_file_path = $ep_requests->eventprime_get_ep_theme('event/performers');
                        include $performers_file_path;
                        
                        ?>
                    </div> 
                    <?php
                    // Load description template
                    $description_file_path = $ep_requests->eventprime_get_ep_theme('event/description');
                    include $description_file_path;
                   
                    ?>
                    
                    <?php do_action( 'ep_after_single_events_description', $args );?>
                </div>
                <?php
                // Load tickets template
                $tickets_file_path = $ep_requests->eventprime_get_ep_theme('event/tickets');
                include $tickets_file_path;
                ?>
             </div>
        </div>

        <?php do_action( 'ep_after_single_event_contant', $args );

    } else{?>
        <div class="ep-alert ep-alert-warning ep-mt-3">
            <?php echo esc_html_e( 'No event found.', 'eventprime-event-calendar-management' ); ?>
        </div><?php
    }