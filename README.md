# Elementor Forms HubSpot Integration

## 1. Installation

Install the following plugins:

- [HubSpot](https://wordpress.org/plugins/leadin/)
- [Automator](https://wordpress.org/plugins/uncanny-automator/)

## 2. Elementor Form Configuration

On the Elementor Form Widget, the "Name" of the Form should be set as `Subscriptions`.

The Form ID should be unique. This allows the client to filter the Form Submissions on HubSpot.

When creating the Elementor Fields, be sure that you add a UniqueID to each field.

Also, you need to add the fields (mandatory)

- `utm_source`
- `utm_medium`
- `utm_campaign`
- `utm_term`
- `utm_content`

**Note:** All UTM fields must be set as text type.


## 3. HubSpot Configuration

Connect to the HubSpot client account.

Within the HubSpot account, follow these steps:

- Go to Settings > Data Management > Create a New Group of Fields.
- Add a name for the group (e.g., UTMs).
- Create a new "Property" for that group.
- Set the "Field Type" to "Single-line text" for all fields, then click on "next".
- Enable the "Show in forms, pop-up forms, and bots" option.

Repeat these steps as many times as necessary to create all the required groups for the client.

