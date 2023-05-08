<?php
session_start();
?>
<body>
    <header>
    <main>
      <article class="Registration">
        <h4>Registration Form</h4>
	<form id="registrationForm"
	      action="scripts/databaseresponse.php"
              method="post">
          <table>
            <tr>
              <td>First Name:</td>
              <td><input required type="text" name="firstName" size="40"
                  title="Initial capital, then lowercase and no spaces"
                  pattern="^[A-Z][a-z]*$"></td>
            </tr>
            <tr>
              <td>Last Name:</td>
              <td><input required type="text" name="lastName" size="40"
                  title="Initial capital, then lowercase and no spaces"
                  pattern="^[A-Z][a-z]*$"></td>
            </tr>
            <tr>
              <td>E-mail Address:</td>
              <td><input required type="text" name="email" size="40"
                  title=
                  "x@y.z, x and y can have . or -, z only 2 or 3 letters"
                  pattern=
                  "^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$"
                  value="Must be unique to our database"></td>
            </tr>
            <tr>
              <td>Phone Number:</td>
              <td><input required type="text" size="40" name="phone"
                         title="xxx-yyy-zzzz, area code optional"
                         pattern="^(\d{3}-)?\d{3}-\d{4}$"></td>
            </tr>
            <tr>
              <td>Street Address:<br />(include postal code)</td>
              <td><textarea id="address" name="address" 
                            rows="2" cols="30"></textarea></td>
            </tr>
            <tr>
              <td>City:</td>
              <td><input id="city" name="city"
                         type="text" size="40"></td>
            </tr>
            <tr>
              <td>State/Province:</td>
              <td><input id="state" name="state"
                         type="text" size="40"></td>
            </tr>
            <tr>
              <td>Country:</td>
              <td><select id="country" name="country">
                <option>&nbsp;</option>
                <option>USA</option>
                <option>Canada</option>
              </select></td>
            </tr>
            <tr>
              <td><input type="submit"
                         value="Submit Form Data"></td>
              <td><input type="reset"
                         value="Reset Form"></td>
            </tr>
          </table>
        </form>
      </article>
    </main>
    <footer>
  </body>
