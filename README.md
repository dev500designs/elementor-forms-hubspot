# elementor-forms-hubspot
1. Installation
Install the plugin: Hubspot - https://wordpress.org/plugins/leadin/
Install the plugin: Automator - https://wordpress.org/plugins/uncanny-automator/

3. Configuration
Connect the Hubspot client account.
On the Hubspot Account, go to Settings > Data Management > Create a New Group of Fields.
Add a Name for the Group, for example, UTMs.
Then create a new "Property" for that group named exactly as utm_XXXXX
The "Field Type" should be: "Single-line text" for all fields, click on next.
Then Enable "Show in forms, pop-up forms, and bots".
  > Repeat all the steps 3 all the neccesary times to create all the groups needed for the client.

4. Elementor Form Configuration
On the Elementor Widget, on the Elementor Form the "Name" of the Form should be named: <strong>Subscriptions</strong>.
The FormID should be unique. Must be set so the Client can filter the Form Submissions on Hubspot.

It is necessary to put the following id to each of the utm form fields ID's.

- utm_source <br />
- utm_medium <br />
- utm_campaign <br />
- utm_term <br />
- utm_content <br />

Important! utm fields must be text type.
