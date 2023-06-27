# elementor-forms-hubspot
1. Installation
Install the plugin from Hubspot - https://wordpress.org/plugins/leadin/

2. Configuration
Connect the Hubspot client account.
On the Hubspot Account, go to Settings > Data Management > Create a New Group of Fields.
Add a Name for the Group, for example, UTMs.
Then create a new "Property" for that group named exactly as utm_XXXXX
The "Field Type" should be: "Single-line text" for all fields, click on next.
Then Enable "Show in forms, pop-up forms, and bots".

4. Step #3
On the Elementor Widget, on the Elementor Form the "Name" of the Form should be named: <strong>Subscriptions</strong> also the Form id should be <strong>Subscriptions</strong>
Also, the fields id of the "hubspot" fields that you want to complete must match, example: first_name should match with the first_name on hubspot.

It is necessary to put the following id to each of the utm form fields ID's.

- utm_source <br />
- utm_medium <br />
- utm_campaign <br />
- utm_term <br />
- utm_content <br />
Important! utm fields must be text type.
