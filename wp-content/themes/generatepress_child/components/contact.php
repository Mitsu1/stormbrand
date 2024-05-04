<?php
    function contact($params){
        $default = array('no_mandatory_fields' => '');
        $atts_for_contact = array_intersect_key($params, $default);        
        $contact_content = shortcode_atts($default, $atts_for_contact);

        $contact_form = "
        <div class = 'contact'>
            <div class = 'contact-content'>
                <form action='' class ='form-contact'>
                <table class = 'table-content'>
                    <tr>
                        <th><label for='fname'  class = 'description'>First Name *</label></th>
                    </tr>
                    <tr>
                        <td><input type = 'text'></input></td>
                    </tr>
                    <tr>
                        <th><label for='lname'  class = 'description'>Last Name *</label></th>
                    </tr>
                    <tr>
                        <td><input type = 'text'></input></td>
                    </tr>
                    <tr>
                        <th><label for='email'  class = 'description'>Email *</label></th>
                    </tr>
                    <tr>
                        <td><input type = 'email'></input></td>
                    </tr>
                    <tr>
                        <th><label for='phone'  class = 'description'>Phone</label></th>
                    </tr>
                    <tr>
                        <td><input type = 'number'></input></td>
                    </tr>
                    <tr>
                        <th><label for='message'  class = 'description'>Your message *</label></th>
                    </tr>
                    <tr>
                        <td><textarea rows = 2  placeholder = 'Write your message here'></textarea></td>
                    </tr>
                    <tr class = 'submit'>
                        <td><input type='submit' value='Submit'></td>
                    </tr>
                </table>
                </form>
            </div>
        </div>";
        return $contact_form;
    }
    add_shortcode('wp_contact','contact');
?>