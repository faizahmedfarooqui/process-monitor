Process-Monitor (PHP - Laravel)
==========================

Queues Status Monitoring : Less/OverLoad/None

## Basic useful feature list:

 * Process status monitoring for the queue jobs i.e. running or stopped
 * Also checks the queued jobs count is running to the expected number of count
 * Mailer to send mail into inbox (not spam) to specified number of admins
 * Option of adding CC for webhooks like Slack

## How to use:

```php
    
    // Execute index.php
    
    
    /*
    *   Edit ProcessConfig.php by providing:
    *   process-name in name index (required),
    *   program-name in program index (optional),
    *   count of process in count index (required)
    */
    
    /*
    *   Edit AdminMail.php by providinf
    *   provide mail username, password
    *   set from mail address
    *   set to mail address in addAddress('mailAddress@host.com', 'Give Any Name')
    *   add CC (optional)
    */
    
    
```