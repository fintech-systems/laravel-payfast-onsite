# Changelog

All notable changes to `laravel-payfast-onsite` will be documented in this file.

## 0.8.0 - 2022-05-30

- Webhook will now store the subscription using the word "default"
- Completely redid the Livewire blade and used boilerplate as reference

## 0.7.2 - 2022-05-30

- Simplified the way the Livewire blade determines subscription status

## 0.7.0 - 2022-05-30

- Change signature for createOnsitePayments to accept merge fields and updated README.md

## 0.6.3 - 2022-05-30

- Readme updates
- Fixed more composer stuff after rename. Abandoning `laravel-payfast` on Packagist in favour of `laravel-payfast-onsite`

## 0.6.2 - 2022-05-30

- More fixes after rename this time in service provider

## 0.6.1 - 2022-05-30

- Fix namespacing after rename

## 0.6.0 - 2022-05-30

- Dropped the word 'Payfast' from the Livewire components
- Renamed repo to laravel-payfast-onsite
- Added to the README to specify a better description and also added `config/payfast.php`

## 0.5.5 - 2022-05-29

- Added an update card method in the Livewire component
- Added a helper method in the service provider to easily identify users in grace period
- Added a method to easily deduce current active subscription
- Work on dates when user cancels current subscription, still have to fix amount

## 0.5.4 - 2022-05-29

- Added PHP code fixer
- Configured Travis
- Removed two currency locale tests because Travis failed
- Removed a lot of old paddle code or renamed it, especially paddleOptions
- There is a now a Receipt Nova interface and a Livewire front-end for receipts too
- Added documentation references to `TROUBLESHOOTING.md`
- Had to comment out four tests as API testing not working yet
- Payment method was added to the subscriptions and receipts table

## 0.5.3 - 2022-05-28

- Added more information about local debugging especially with regards to changing the `.env` for Expose / ngrok
- Added Nova assets, a Subscription resource and two actions, Fetch Subscription and Cancel Subscription
- The Livewire Jetstream blade should now interpret if you are in grace period (e.g. you have cancelled)
- Added code to get the PayFast subscription `status_text` and `run_date` post Subscription creation so that the UI can show when the next billing will occur
- Worked on spacing of lines and logging and commenting
- Fixed some links to live code in README

## 0.5.2 - 2022-05-27

- Added information about setup to README and new TROUBLESHOOTING file
- Created alpha release

## 0.5.1 - 2021-12-26

- Breaking change Subscription table now has all fields returned by Fetch Subscription from PayFast API
- Added payment_method to subscriptions table
- Updated composer
- A new test to check if subscription payments can be handled
- A basic receipt test was copied from Cashier Paddle
- An *incomplete* Fetch subscription test was created
- Fetch subscription now returns the array from PayFast
- A new PayFast API service provider was created that implements the code in the constructor
- There is a new method to update a PayFast subscription
- Fairly close to a beta candidate as most of the database schema work is done
- Tests *failing*

## 0.4.1 - 2021-12-14

- migrated payfast-jetstream blade back into this library
- add $user in Subscription module and removed 'message' listener
- started implementation of trials
- the cancel dialog will now close on cancellation
- removed some debugging code, both in the Subscription module and the Subscription concern
- updated the webhook to handle card information updates
- added IP address to order information and updates many tests
- added merchant_payment_info to many tests as it caused nullable errors
- all tests passing

## 0.4.0 - 2021-12-12

- added ip_address to orders table, breaking change
- order ID doesn't have to be unique anymore in receipts table
- don't send return value when receiving an exception in the webhook
- reverse engineered onsite.engine.js and obtained a working event listener 'message'
- added event listeners for post PayFast subscription modal event 'message'

## 0.3.0 - 2021-12-12

- did a lot of work on the Jetstream/Livewire component to get dynamic subscritions working
- breaking change is createOnsitePayment signature change

## 0.2.0 - 2021-12-10

- the system can now handle ad-hoc payments and will store the receipts
- refactored database to handle ad-hoc receipts
- created boilerplate to fetch subscription information after appying a payment
- refactored the webhook to make it look a lot more tidy
- move another routine into try / catch block
- told the bank to get off and fix my card which doesn't work - will get a a Thyme bank card tomorrow
- improved logging sentence with full stop and more ray colour coding in webhook

## 0.1.0 - 2021-12-07

- more refactoring to keep payfast class small and compact
- first attempt at getting onsite payments work - card locked out with 'Unfortunately this card does not support recurring payments.'
- the order is now a numeric and a dash with today's date and time
- improvement on invalid morph model exception message

## 0.0.3 - 2021-12-07

- refactored webhooks
- all tests passing for the first time

## 0.0.2 - 2021-12-05

- ability to create a new ad-hoc subscription with any amount
- ability to cancel a subscription
- copied many of the Laravel Paddle tests and made them work
- foundation jetstream block to show subscription information
- ability to create a new ad-hoc subscription with R 0 amount
- pay button generation

## 0.0.1 - 2021-12-03

- initial release
