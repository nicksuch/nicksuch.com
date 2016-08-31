---
layout: post
title:  "Using Raspberry Pi and Python to upload videos to YouTube"
date:   2016-08-31 10:06:00
---

For [Awesome Inc's Web Developer Bootcamp](https://www.awesomeincu.com/bootcamp/), we've been recording videos of each day of class, then uploading them to YouTube. We capture the instructor's screen as well as audio from the classroom. With our 12-weeks of on-site classes, that's 60 days worth of recordings, with 4-8 hours of video per day, yielding approximately a 4 GB file each day. As our curriculum for this course focuses on programming in Python, I wondered if there was a way to automate our daily uploads using this language. It turns out, [Google's YouTube Data API v3](https://developers.google.com/youtube/v3/) provides a way to do this.

## Hardware setup

Before I get into the code that we're now using to process our uploads, I wanted to explain our hardware setup, as it demonstrates why this system is needed. In the past, we've recorded class videos using software on our instructor's computer, such as Screenflow. While we love that option for creating and editing scripted instructional videos for online course sites like Udemy, it has some downsides for simply recording live lectures. First, since it runs on our instructor's computer, it eats up system resources on that computer, slowing it down for other demonstration uses. It also results in a video file that lives on our instructor's computer, while we'd rather have it on a dedicated external drive. As our course director, I'm the one who's responsible for logistics like managing video uploads, while our instructors get to focus on working with our students. Second, we have not just one instructor like in past classes, but two instructors for our Bootcamp. We'd like to capture each of their screens whenever it is shared over the classroom monitors. This would mean that both instructors would have to run screen capture software on their machines, then I'd have to collect both of those video files, and splice them together in post-production. I don't want to waste time on post production, especially over 60 days of video. This is why we looked for a dedicated hardware solution to record our video.

What we discovered was that avid gamers had already found a solution! We needed a hardware device to record video from an HDMI source. In our case, this was our instructor's laptop. For the gamers, it was their gaming console. The HDML Cloner Box Pro allows us to pass in an HDMI source, record it to an external hard drive, and pass the source back out to our external display with no lag or signal loss. It has some basic features like scheduled recording, and also allows for external audio input. While a gamer may use it to capture communication with other players, or narration of a lets-play, we use it to capture our instructors' discussions with our students. The audio input comes across a 1/8th-inch audio cable from a condenser microphone. The condenser microphone requires phantom power, which it receives from a USB port. We tried using a USB charging brick to provide this power, but our microphone didn't like that. We ended up plugging into a spare Raspberry Pi just to get the microphone powered properly, which turned out to have other upsides.

Inspired in-part by [the folks at Pivotal](https://medium.com/built-to-adapt/hacking-the-workspace-d9a448ce5e6e#.ionzyckqc), we opted to design our "classroom" more like an "office". In particular, an office set up for Pair Programming. So, instead of having one large display for broadcasting our instructor's screen, we have a 23-inch monitor shared between every two students. During lectures, the students can see the instructor's screen just like it was a second monitor on their desk, and during project time, students can connect their own laptops to the monitors to collaborate with their partner. Powering a projector or 60-inch would have use a single cable from our instructor's computer to the display. For this setup, we needed a video splitter to send the signal to the 7 smaller displays around the room. We used an 8-port HDMI splitter and some Amazon Basics HDMI cables to make this happen. The Cloner Box passes its video output to the splitter's input.

Here's our full hardware list:

- [Cloner Box Pro](http://www.cloner-alliance.com/hdmicloner-box-pro.html)
- [Seagate Backup Plus Slim 1 TB external hard drive](https://www.amazon.com/gp/product/B00H4XH5IG/)
- [Samson Meteor microphone](https://www.amazon.com/gp/product/B004MF39YS/)
- [Amazon Basics HDMI Cables](https://www.amazon.com/gp/product/B014I8TC4E/)
- [OREI 8-port HDMI v1.4 Splitter](https://www.amazon.com/gp/product/B00UNL1Y24/)
- [Raspberry Pi 3](https://www.amazon.com/gp/product/B01CD5VC92/)

<br>

## The Problem

For week 1 of class, the hardware setup worked great! Our instructors were able to easily share their screens with our students, and each student was able to see the output clearly on the display on his or her own desk. The Cloner Box did a great job recording each day's lecture to our 1 TB external hard drive. However, I began to run into problems uploading the videos each evening. Since the 4 GB video file takes over an hour to upload, I've been detaching the external hard drive from the Cloner Box, walking it downstairs to a spare desktop computer, logging into Awesome Inc's YouTube account, and starting the upload. Each morning, I needed to go back to this computer, log out of YouTube, move the external hard drive back to the classroom, and plug it back into the Cloner Box so we could start recording class again. I found that, after a week, other things came up in the morning, so I forgot to retrieve the hard drive, and we missed some of the morning's class content. Second, I didn't feel very good leaving my YouTube account (and thus, my Google account) left open overnight on a shared public computer in our office.

## The Idea

So, there was this Raspberry Pi sitting amongst our video recording hardware, and to this point, all it was doing was serving as a USB power source for our condenser microphone. What if there was a way to use the Raspberry Pi as our dedicated upload computer? And while we might be able to use the YouTube website through the Pi's web browser...we know Python!

## Python Video Upload Script

The friendly Google Developer folks provide a [nice guide for uploading a video to YouTube using Python and their Data API](https://developers.google.com/youtube/v3/guides/uploading_a_video). I cloned the [youtube/api-samples](https://github.com/youtube/api-samples) repository from GitHub, and dug into the [python/upload-video.py](https://github.com/youtube/api-samples/blob/master/python/upload_video.py) sample script. I first tested out these steps on my Mac before SSH-ing to the Pi and running from there. According to the guide, I had a few steps before I could upload a video with the script:

1. Make sure I have Python installed (check!)
2. `pip install google-api-python-client` ([Google APIs client library for Python](https://developers.google.com/api-client-library/python/start/installation))
3. Register an application with the Google Developer Console.
4. For your new project, Enable API for the "YouTube Data API v3" 
5. Put the OAuth 2.0 credentials into a `client_secrets.json` file on the Pi. Google provides a [special format for this JSON file](https://developers.google.com/api-client-library/python/guide/aaa_client_secrets). I used the format for an "Installed application".
6. Run the script the first time with the `--noauth_local_webserver` flag. This will produce a URL that you can paste in use to finish authorizing your local machine to use the application. In our case, it also allowed us to select which YouTube account to upload to (since I have access to my personal channel and our Awesome Inc channel).

Once I did this setup, I was able to call the script to upload a video. I ran

$ `python python/upload_video.py --file test_20160831.mov --privacyStatus unlisted`

And sure enough, my sample video upload made it's way to our YouTube channel!

## Wish List

There are a few things missing from our current setup:

- Upload progress indicator (4 GB files take a while to upload at 8 Mbps)
- Means for the Raspberry Pi to access the Cloner Box Pro and the contents of the drive mounted to it (Box has a USB control port...)
- Scheduled video recording start / stop time each day
- Cron job to automatically upload video every evening
- Automatically add the uploaded file to a playlist