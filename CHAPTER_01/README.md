# An Intro to Web Development + PHP

### The World Wide Web
The **Wold Wide Web** denotes the area of information exchange you have access to when an internet connection is established. The **internet** consists of a gazillion devices working together to render a web page on your web browser.

## Client Server Architecture
The **client** hops onto the internet bar and orders a web page with a click of a button. The **server** comes by and serves the client a few pops known as resources. The client calls the **web server** right up and asks for a few websites. The web server asks the client if they have a **web browser** to serve the few pops.

The **network** breaks and the client looses communication with the server. The client hooks up a new **Network Interface Card (NIC)** to be part of the communication system again. The network **routes** the information from one computer to another. The **router** is connected to two or more networks and sends the information to the network closest to the destination.

The client gets their pops on the **Local Area Network (LAN)** because it is small, they know each other, and they are less than a block away. However, when the client wants a special pop from far far away, the client looks toward the **Wide Area Network (WAN)** to search through the connected LANs and find the special pop. The special pop is found on a special WAN but it belongs to an **Internet Service Provider (ISP)**. The ISP doesn't mind leasing access to their network so the client has access to the internet, but at a special price.

The client can't afford this special price. The ISP offers the client to checkout other WANs that are connected together at large routers known as **Internet Exchange Points (IXP)**.

## Static Web Pages

A **static web page** only changes when the developer changes it. The client hops onto the internet to look for some pops and selects one. The web browser builds a **HTTP request** for the requested web page and sends it to the web server. 

The HTTP request is formatted using the **HyperText Transfer Protocol (HTTP)** for the web server to know which file is being requested. The web server receives the HTTP request and retrieves the requested web page from storage and sends it back to the web browser as an **HTTP response**. This reponse includes all sorts of files to render the website. The information exchange process mentioned before also must follow the **Transmission Control Protocol/Internet Protocol (TCP/IP)** to communicate over the network.

## Dynamic Web Pages

A **dynamic web page** is a page that's created by software running on a web server. Meaning that the web page can change each time it is viewed. These changes can come from the user submitting form data to be processed or displaying data retrieved from a **database server**. A type of server that houses information structured in tables or pages to retrieve, create, update, or delete information as fast as possible with a single query.

These dynamic web pages may be created using PHP. The **PHP Interpreter** is special software running on a web server that gets the appropriate PHP script with any other necessary data to be executed to generate a web page as output.

## Editing
Use [Vim](https://www.vim.org/) because prevents you from sleeping with auto correct.

## Deployment + Execution
At first I was surprised that nothing showed up after I opened the html file containing PHP. I learned that JavaScript is automatically served by the browser, not PHP. A server must be created to serve the PHP code.

"bUt I dOnT hAvE a SeRvEr!"

Not to worry, follow a [tutorial](https://www.youtube.com/watch?v=RwQW0Qy85jY) to run the PHP on a website. Use open source [software](https://www.mamp.info/en/windows/) to serve your PHP code as highlighted in the tutorial. If you can't figure it out, I don't know what to tell you. You might have an amoeba for a brain or something.
