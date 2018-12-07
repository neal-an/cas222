
    <div id="registration">
        <form method="post" action="">
            <input type="text" name="honeypot" id="honeypot" class="honeypot" value="" alt="if you fill this field out then your email will not be sent" />
            <table class="regTable regTop">
                <tr>
                    <th colspan="3" class="sectionSeparateBot"><label>*Choose Your Race(s):</label></th>
                </tr>
                <tr>
                    <th colspan="3" class="dayHead">Saturday</th>
                </tr>
                <tr>
                    <td class="raceNameColumn"><span class="raceName">Long Course Triathlon</span></td>
                    <td class="checkBoxColumn"><input type="radio" id="raceSat" name="raceSat" value="lctri"></td>
                    <td>$240</td>
                </tr>
                <tr>
                    <td class="raceNameColumn"><span class="raceName">Olympic Triathlon</span></td>
                    <td class="checkBoxColumn"><input type="radio" id="raceSat" name="raceSat" value="olytri"></td>
                    <td>$110</td>
                </tr>
                <tr>
                    <td class="raceNameColumn"><span class="raceName">10K</span></td>
                    <td class="checkBoxColumn"><input type="radio" id="raceSat" name="raceSat" value="10k"></td>
                    <td>$50</td>
                </tr>
                <tr>
                    <td class="raceNameColumn"><span class="raceName">Half Marathon</span></td>
                    <td class="checkBoxColumn"><input type="radio" id="raceSat" name="raceSat" value="halfmar"></td>
                    <td>$75</td>
                </tr>
                <th colspan="3" class="dayHead">Sunday</th>
                <tr>
                    <td class="raceNameColumn"><span class="raceName">Sprint Triathlon</span></td>
                    <td class="checkBoxColumn"><input type="radio" id="raceSun" name="raceSun" value="sprinttri"></td>
                    <td>$90</td>
                </tr>
                <tr>
                    <td class="raceNameColumn"><span class="raceName">Try-a-Tri</span></td>
                    <td class="checkBoxColumn"><input type="radio" id="raceSun" name="raceSun" value="tryatri"></td>
                    <td>$65</td>
                </tr>
                <tr>
                    <td class="raceNameColumn"><span class="raceName">Splash n Dash</span></td>
                    <td class="checkBoxColumn"><input type="radio" id="raceSun" name="raceSun" value="splash"></td>
                    <td>TBD</td>
                </tr>
            </table>
            <table class="regTable">
                
                <tr class="sectionSeparate">
                    <td>
                        <label for="myfname">*First Name:</label></td>
                    <td><input type="text" name="myfname" id="myfname" required></td>
                </tr>
                <tr>
                    <td>
                        <label for="mylname">*Last Name:</label></td>
                    <td><input type="text" name="mylname" id="mylname" required></td>
                </tr>
                <tr>
                    <td>
                        <label for="myemail">*Email:</label></td>
                    <td><input type="email" name="myemail" id="myemail" required></td>
                </tr>
                <tr>
                    <td>
                        <label for="myphone">Phone:</label></td>
                    <td><input type="tel" name="myphone" id="myphone"></td>
                </tr>
                <tr>
                    <td>
                        <label for="selShirt">Select T-Shirt Size</label></td>
                    <td><select id="selShirt">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                        <option>2XL</option>
                        <option>3XL</option>
                        <option>4XL</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Are you volunteering to work the event?</td>
                    <td><label for="vol">Yes</label><input type="radio" id="vol" name="vol" value="Yes"><label for="vol">No</label>
                    <input type="radio" id="vol" name="vol" value="No"></td>
                </tr>
                <th colspan="2" class="sectionSeparateBot"><label>Emergency Contact Information</label></th>
                     <tr>
                    <td>
                        <label for="myfname">*First Name:</label></td>
                    <td><input type="text" name="myfname" id="myfname" required></td>
                </tr>
                <tr>
                    <td>
                        <label for="mylname">*Last Name:</label></td>
                    <td><input type="text" name="mylname" id="mylname" required></td>
                </tr>
                <tr>
                    <td>
                        <label for="myphone">*Phone:</label></td>
                    <td><input type="tel" name="myphone" id="myphone" required></td>
                </tr>
                <tr>
                    <td colspan="2" class="submitButtonColumn">
                        <input id="mysubmit" type="submit" value="Submit" class="submitButton"></td>
                </tr>
            </table>
        </form>
    </div>
