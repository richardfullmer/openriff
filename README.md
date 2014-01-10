rad-edition
===========

The Knp RAD edition of Symfony2

Read the [full documentation](http://rad.knplabs.com/).



Ratchet Listener
===============
this test currently has some hard coded crap to connect to openriff.dev:8080 so you will need to change or set up a host, 
riff.js has a line that connects to this host:port so need to parameterize this.

php src/Openriff/Command/QueueCommand.php to start the websocket listener,
a proper CommandAware app/console app should be created, this is just a test.

