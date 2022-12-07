# github.io
a github portfolio project hosted by namecheap
- https://www.kiddjsh.xyz

- Web Design Using
    - HTML
    - CSS
    - Javascript
    - PHP
# Updates
- Currently undergoing a three-band stylesheet for HTML, CSS, and JavaScript sections to be separated
into individual slice files of their known script languages
- Currently adding playable game design prototypes to sub-domains
  - Treasure Cave
  - bubblesCollide
  - O'Hare Crossword Puzzle
- Currently working on GitHub Pages
  - https://kiddjsh.github.io/github.io/
  - For Best Results Please Use Latest Version of Internet Explorer

# My Contact Form
Currently in PROTOTYPE. Uses an email validation to ensure the symbol @ is used. Uses the PHP mail() function to send emails. With the PHP mail() function, emails are sent directly to my web server, to an email account that was created within cPanel, hosted on my server, that uses a local mail exchanger.

# Known Issues
 - There is a known issue with the hamburger menu__menu box closeNav() where it doesn't close properly during onClick() when using Firefox
 - There is a known issue where the hamburger menu disappears during closeNav() and autoscroll during hyperlink 
 - There is a known issue with the download buttons for the Resume and the CV, where it doesn't download the files properly when using Firefox, an anchor has been added to a third-party site for <button> to view the documents
 - Some of the file icons located in the portfolio section display 404 Errors when clicking the simpleicon

# Version Control

Version      | Date          | Author        | Change Description |
------------ | ------------- | ------------- | ------------------ |
1.0          | 11NOV2022  | Joshua Kidder | Created GitHub repository and namecheap domain hosting, added CNAME file, established website, website design (front-end) began
1.1          | 28NOV2022  | Joshua Kidder | Created .php file (back-end), added php mail() function
1.1          | 01DEC2022  | Joshua Kidder | Ported to test github.io project php services, uploaded package to cPanel, began configuration of php services on namecheap, configured web hosting, added MX record, added A records pointing to github, updated CNAME to point at github
1.2          | 02DEC2022  | Joshua Kidder | Updated php mail() function
1.2          | 02DEC2022  | Joshua Kidder | Updated MX record, temp removed 404.html
2.0          | 02DEC2022  | Joshua Kidder | Prototype php mail() function services
2.1          | 04DEC2022  | Joshua Kidder | Resolved conflicting A Records, updated CNAME, and integrated git into namecheap
2.1          | 05DEC2022  | Joshua Kidder | Updated the php mail() function, resolved mail subject and from email reference; updated the CV file and anchor link
2.1          | 06DEC2022  | Joshua Kidder | Added standard email validation in contact form by changing type="text" to type="email" when clicking SEND MESSAGE button
2.1          | 07DEC2022  | Joshua Kidder | Updated skills.io, restructured certifications.io, updated certifications.io, updated viewable CV, updated contact form adding name-email-subject-message as required when clicking SEND MESSAGE button, updated footer icons to be black