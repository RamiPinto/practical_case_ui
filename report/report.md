---
title: User Interfaces - Case Study (group 10)
author:
    - Daniel Martín Blázquez - 100346096
    - Maryna Kotok - 100379764
    - Ramiro Pinto Prieto - 100346042
    - Richard Lopez - 100382007
geometry: "left=2cm,right=2cm,top=2cm,bottom=2cm"
header-includes:
    - \usepackage{siunitx}
    - \usepackage{etoolbox}
    - \usepackage{caption,setspace}
---

![](./img/logo_uc3m.png)

\newpage

\hypersetup{hidelinks}
\setcounter{tocdepth}{2}
\tableofcontents


\newpage


# 1. Introduction

This practice consists on the design, implementation and analysis of a video stream web page. To do so, we will create a prototype with some online tools, implement it writing code and analyzing the heuristic and the patterns used, and all will be reported in this document.

This document is organized into several parts. The first one is an introduction, which explains the practice and the organization of the document. The second one specifies the main goal of the system, providing a full description of the web page and the functionalities that the web page has. In the third part, which is the analysis and evaluation part, the end users are described with the illustration of three personas, and the heuristics and patterns of similar websites in which ours is based on are explained. The fourth part is where the design and the main goal of the two previous prototypes are shown, where the fifth one specifies the reasons of the design of the new prototype, as well as the Nielsen’s heuristics and Van Duyne patterns that have been applied. In the sixth part, the technology used to implement the webpage is explained, and in the seventh part, the whole implementation process is described. Finally, a final conclusion and personal opinion is given in the eighth part.

\newpage

# 2. Main Goal of the System

## 2.1. Description

The webpage implemented is a video streaming web page. Therefore, the main goal of the system is to provide to the end users an online service in which they can watch series and movies, most of them oriented to kids, so that all the family sit together to watch a film or a movie whenever they want. Also, the end users will have the possibility to create playlists, in which they can store their favorite episodes and movies, and share them with other users.

## 2.2. Functionalities

The webpage supported two modes of being there, otherwise it can be used with or without a subscriptions.
Not subscribed users have less available functionalities and opportunities. So in this mode it will work not fully. They can navigate published videos and basic information about them such as descriptions, amount of likes, dislikes, sharing, titles and how many people have seen this current video. Also search videos related to a specific topic with search system which is built inside of the website for using it easy and without confusing and also create an account and then sign in to the system.
When the user is logged to the system, here we can notice bigger range of various functionalities. Keeping functionalities which has unregistered user and much more. Additionally, they can interact directly with the videos (likes, comments, sharing in other social networks), save favorite videos to the playlists, which are created by that user, subscribe playlists from other users. In creating playlist process will be available three options such as private list which nobody can follow, public list which are visible for everybody and collaborative list where other users can participate and add different content.



\newpage

# 3. Analysis and Evaluation

## 3.1. End Users Description

### User 1: Lucas
\begin{center}
   \includegraphics[width=170mm]{./img/user1.png}
\end{center}


### User 2: Ross
\begin{center}
   \includegraphics[width=170mm]{./img/user2.jpeg}
\end{center}

### User 3: Mary
\begin{center}
   \includegraphics[width=170mm]{./img/user3.jpeg}
\end{center}


## 3.2. Analysis and Evaluation of Similar Web Pages

### 3.2.1. Site 1: Youtube

#### A) Context

YouTube is an American video-sharing website which allows users to upload, view, rate, share, add to favorites, report, comment on videos, and subscribe to other users. It offers a wide variety of user-generated and corporate media videos. Available content includes video clips, TV show clips, music videos, short and documentary films, audio recordings, movie trailers, live streams, and other content such as video blogging, short original videos, and educational videos. Most of the content on YouTube is uploaded by individuals, but other media corporations offer some of their material via YouTube.

Unregistered users can only watch videos on the site, while registered users are permitted to upload an unlimited number of videos and add comments to videos. Videos deemed potentially inappropriate are available only to registered users affirming themselves to be at least 18 years old. YouTube earns advertising revenue from Google AdSense, a program which targets ads according to site content and audience. The majority of its videos are free to view, but there are exceptions.

#### B) Nielsen's Heuristics

1. Visibility of system status

Progression bar with different colors. Black for unloaded content, gray for loaded, red for reproduced content and yellow for advertising parts.
There is also a bar showing the like-dislike rate.
\begin{center}
   \includegraphics[width=170mm]{./img/yn1.png}
   \captionof{figure}{Visibility of system status}
\end{center}

2. Match between system and real world

The system uses common expression for describing categories, which helps the user to understand what the links do.
\begin{center}
   \includegraphics[width=170mm]{./img/yn2.png}
   \captionof{figure}{Match between system and real world}
\end{center}

3. User control and freedom

There is a clearly marked  “emergency exit” buttons for important actions. The action button is more hidden in order to prevent unintended consequences.
\begin{center}
   \includegraphics[width=170mm]{./img/yn3.png}
   \captionof{figure}{User control and freedom}
\end{center}

4. Consistency and standards

Significant inconsistencies were not found

5. Error prevention
\begin{center}
   \includegraphics[width=170mm]{./img/yn5.png}
   \captionof{figure}{Error prevention}
\end{center}

6. Recognition rather than recall

Predictive options on search.
\begin{center}
   \includegraphics[width=170mm]{./img/yn6.png}
   \captionof{figure}{Recognition rather than recall}
\end{center}

7. Flexibility and efficiency of use

Many options for customizing your youtube channel or account. There is no need to customize your account for a nice use of the system, but the settings add a lot of functionalities for experienced and professional users.
\begin{center}
   \includegraphics[width=170mm]{./img/yn7.png}
   \captionof{figure}{Flexibility and efficiency of use}
\end{center}

8. Aesthetic and minimalist design

Minimalist design that makes it easy for the user to navigate the website.
\begin{center}
   \includegraphics[width=170mm]{./img/yn8.png}
   \captionof{figure}{Aesthetic and minimalist design}
\end{center}

9. Help users recognize, diagnose, and recover from errors

The system shows descriptive error messages in a natural way. But it does not show how to recover from that error, like showing a message saying that you can search for similar videos.
\begin{center}
   \includegraphics[width=170mm]{./img/yn9.png}
   \captionof{figure}{Help users recognize, diagnose, and recover from errors}
\end{center}

10. Help and documentation

Help button is in the settings menu, not particularly easy to find for inexperienced users.
\begin{center}
   \includegraphics[width=170mm]{./img/yn10.png}
   \captionof{figure}{Help and documentation}
\end{center}

#### C) Van Duyne Patterns

1. B: Navigation Framework

- *B1: Multiple ways to navigate.* There is Search System, which is located at the top and start of the page. There is also a menu , which include everything what you need(of course, if the user is registered there is more options), for example: History, Watch Later, Liked videos, Subscriptions etc. So the navigation is really understandable and give the opportunity to find the corresponding information and content.
- *B7: Popularity-based organization.* We can see and easy to find which content is the most popular. It has on the navigation on the left a field which is called TRENDING, where the user can find out a list of top content, and check how it was rated and over what period. And that is really useful information which is given in appropriate way.
- *B8: Category pages.* The category sections are introduced with a consistent layout. The website has a really lovely design which help us to understand where the user is now by the switching colors of image to corresponding fields. For example, if we have red color which corresponds to Watch Later field , we now that we now are located inside of. If we aren’t, it has a grey color. Easy and understandable.
\begin{center}
   \includegraphics[width=170mm]{./img/yvdpb1.png}
   \captionof{figure}{Van Duyne Pattern B1}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/yvdpb7.png}
   \captionof{figure}{Van Duyne Pattern B7}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/yvdpb8.png}
   \captionof{figure}{Van Duyne Pattern B8}
\end{center}

2. D: Writing and Managing content

- *D1: Page Templates.* It defines an individual template that specifies content size limits for images and text. YouTube uses a very good template (GRID LAYOUT) and it demonstrates us the basic navigation elements just in three main content areas.
- *D3: Headlines and blurbs.* It has short and distinctive headlines and blurbs to hook customers into clicking for more content deeper on the site. Each headline indicates why the context is important to visit corresponding page of the website. It is built comprehensible and quite naturally.
- *D5: Message Box.* The message boards are really easy to find and use just by clicking on the related video or another kind of content. Also, there is an opportunity to save favorite boards in the customer profile, but that option just is enabled, when the user is REGISTERED. Everywhere people have the ability to read posts before signing in or signing up. It provides a simple form to post a new message or a reply.


\begin{center}
   \includegraphics[width=170mm]{./img/yvdpd1.png}
   \captionof{figure}{Van Duyne Pattern D1}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/yvdpd3.png}
   \captionof{figure}{Van Duyne Pattern D3}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/yvdpd5.png}
   \captionof{figure}{Van Duyne Pattern D5}
\end{center}

3. E: Building Trust and credibility

- *E1: Site Branding.* Youtube has built a strong site brand so that it has become the most popular platform to see and share videos. Its logo is visible on all pages and the company name appears repeatedly.
- *E4: Privacy Policy.* The website found the way to tell their customers what kind of information it is collecting and how that information is used to provide value.
- *E5: About us.* YouTube was taken care about this section ABOUT US. And we can feel it really clear, when I clicked on field ABOUT, I was moved to special website which is dedicated to corresponding section and information is well-ordered, so if the user wants to be familiar with You Tube it will be easy to do. It helps people learn more about what company is, what company does, and why people can trust the company. Also it includes an organizational profile, contact information, legal information, customers, partners etc.

\begin{center}
   \includegraphics[width=170mm]{./img/yve1.png}
   \captionof{figure}{Van Duyne Pattern E1}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/yvdpe4.png}
   \captionof{figure}{Van Duyne Pattern E4}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/yvdpe5.png}
   \captionof{figure}{Van Duyne Pattern E5}
\end{center}

### 3.2.1. Site 2: Movistar+

#### A) Context

Movistar+ is a subscription platform for digital television. The web platform was created with the aim of allowing users to access the digital TV channels package from any device with internet connection. TV programs can be stopped, fast forward, rewind or recorded while seeing. In addition to provide access to national and international television channels through the internet, it also includes the possibility of seeing movies, series, sport matches, documentaries and more. Besides, the platform has a section for children, so they can surf safely between content that interests them.

#### B) Nielsen's Heuristics

1. Visibility of system status

While reproducing videos we can see the progression bar.
When a content is charging there is an animation that point the work in progress.
\begin{center}
   \includegraphics[width=170mm]{./img/mn1_1.png}
   \captionof{figure}{Visibility of system status example 1}
\end{center}
\begin{center}
   \includegraphics[width=70mm]{./img/mn1_2.png}
   \captionof{figure}{Visibility of system status example 2}
\end{center}

2. Match between system and real world

\begin{center}
   \includegraphics[width=170mm]{./img/mn2.png}
   \captionof{figure}{Match between system and real world}
\end{center}

3. User control and freedom

Confirmation and identification message when buying new packages.
\begin{center}
   \includegraphics[width=170mm]{./img/mn3.png}
   \captionof{figure}{User control and freedom}
\end{center}

4. Consistency and standards

\begin{center}
   \includegraphics[width=170mm]{./img/mn4.png}
   \captionof{figure}{Consistency and standards}
\end{center}

5. Error prevention

\begin{center}
   \includegraphics[width=170mm]{./img/mn5.png}
   \captionof{figure}{Error prevention}
\end{center}

6. Recognition rather than recall

\begin{center}
   \includegraphics[width=170mm]{./img/mn6.png}
   \captionof{figure}{Recognition rather than recall}
\end{center}

7. Flexibility and efficiency of use

There are no tools that allow experienced users to tailor frequent actions.


8. Aesthetic and minimalist design

\begin{center}
   \includegraphics[width=170mm]{./img/mn8.png}
   \captionof{figure}{Aesthetic and minimalist design}
\end{center}

9. Help users recognize, diagnose, and recover from errors

The platform prevents the user from making mistakes. The unallowed options can not be selected, and in the case that we can choose one of them, a message explaining the steps for being able to select that option is shown.
\begin{center}
   \includegraphics[width=170mm]{./img/mn9.png}
   \captionof{figure}{Help users recognize, diagnose, and recover from errors. Example 1}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/mn9_2.png}
   \captionof{figure}{Help users recognize, diagnose, and recover from errors. Example 2}
\end{center}

10. Help and documentation

\begin{center}
   \includegraphics[width=170mm]{./img/mn10.png}
   \captionof{figure}{Help and documentation}
\end{center}


#### C) Van Duyne Patterns

1. B: Navigation Framework

- B1:Search and navigation tools placed at the top and start of the page.
- B2:Content organized in categories that make sense to the users in an intuitive way.
- B3:Hierarchical organization with descriptive category names. However, there are some generic terms.
- B7:Popularity based organization
- B8: The pages are categorized by highlighting in the navigation bar the section in which the user is.
\begin{center}
   \includegraphics[width=170mm]{./img/mvb.png}
   \captionof{figure}{Van Duyne Pattern B}
\end{center}

2. J: Making Site Search Fast and Relevant

- J1: Search action module
- J2: Search engine that does not require extreme precision
- J3: Organized search result based
\begin{center}
   \includegraphics[width=170mm]{./img/mvj.png}
   \captionof{figure}{Van Duyne Pattern J}
\end{center}


\newpage

# 4. Previous Prototypes

## 4.1. Prototype 1

### 4.1.1. Main Goal

The first prototype, which was “Tubevision”, had the following main goal, which was explained in the third exercise:

“*Tubevision*, our video content platform, is a multimedia website for a diverse audience of users. Designed as an easy-to-use website, it features the ability to browse for content by category and to search for content through the use of a search box. Users to the website must subscribe in order to access the video content on the website, which spans from user-uploaded videos to TV streaming content to movies/films. In addition, *Tubevision* is accessible via a mobile device or a traditional desktop computer.

The webpage is monetized through two forms: 1) premium subscriptions and 2) pre-content video ads. Premium subscriptions are paid versions of subscription accounts which enables special features not available to non-premium subscribers, such as unlimited offline video downloads, unlimited movies, speech interface, and video advertisement-free content. Instead of invasive display ads on the side panel, non-premium users are shown short video ads spanning several seconds before their selected video content plays.”


### 4.1.2. Design

\begin{center}
   \includegraphics[width=170mm]{./img/p1.png}
   \captionof{figure}{Home menu without Parental Control}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/p2.png}
   \captionof{figure}{Account Settings Menu}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/p3.png}
   \captionof{figure}{Identification form for applying settings changes}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/p4.png}
   \captionof{figure}{Home menu with Parental Control}
\end{center}


## 4.2. Prototype 2

### 4.1.1. Main Goal

The second prototype, which was “ScoobyMovie”, had a much more similar main goal to this final website. It was also a video streaming website for children, where they can watch films and series oriented to them, and create playlists to save their favorite videos and share them with other people through social media. They can also leave comments and likes on the videos. The most notable difference between this website and “ScoobyMovie” is the design, which is totally different.

### 4.1.2. Design

\begin{center}
   \includegraphics[width=170mm]{./img/p2_2.png}
   \captionof{figure}{Home Page}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/p2_22.png}
   \captionof{figure}{Sign Up Page}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/p2_23.png}
   \captionof{figure}{Play Page}
\end{center}

\newpage

# 5. New Prototype

\begin{center}
   \includegraphics[width=170mm]{./img/prot1.png}
   \captionof{figure}{Final prototype home page}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/prot2.png}
   \captionof{figure}{Final prototype with side menu displayed}
\end{center}

## 5.1. Design Reasons

When we faced the design of the new prototype, our intention was to try to put together the good points of each one of the analyzed websites in a new page that  satisfies the needs of the users to whom it is oriented. For this reason we can see a minimalist design, very simple and easy to use, as the large and striking letters and icons denote. The sidebar menu has 3 options, each one of them accompanied by a character to make the options easier to recognize by the children and create a kid-friendly interface.

\begin{center}
   \includegraphics[width=55mm]{./img/ryb.jpg}
   \captionof{figure}{Home menu without Parental Control}
\end{center}

The page color pattern is based on the RYB color model. As we can see, all the design is based on the three main colors of the model: Red, Yellow and Blue, but we left  the color design open enough to ensure that no color is out of tone, as a video page expects a great diversity of colors in the video thumbnails. Predominant color is blue, as this color is associated with the calm and tranquility, and it does not tire the eyes or distract from the main elements. Yellow is used for the important elements to attract attention and be easy to recognize. And finally, red is only used for design reasons and as a pigment to mix with the other main colors to create a wider range of colors, it has not been intended to be abused in its use because of its negative connotations, as it is usually associated with errors and it tires the eyes.

During the design process, we were very mindful of the design patterns. Some of them are explained in the following points.

## 5.2. Nielsen's Heuristics

1. Visibility of system status

The page keep users informed about what is going on when they make any action by means of short messages that are easy to understand.
\begin{center}
   \includegraphics[width=170mm]{./img/tn1.png}
   \captionof{figure}{Visibility of system status}
\end{center}

2. Match between system and the real world

The page speaks in a colloquial and animated tone.
\begin{center}
   \includegraphics[width=170mm]{./img/tn2.png}
   \captionof{figure}{Match between system and the real world}
\end{center}

3. User control and freedom
When the user log in they can choose undo the action or go forward.
\begin{center}
   \includegraphics[width=170mm]{./img/tn3.png}
   \captionof{figure}{User control and freedom}
\end{center}

4. Consistency and standards

In every moment we have tried to follow a standard according to the website conventions in order to not create inconsistencies.

5. Error prevention

The page prevents the user from making mistakes by reporting incorrect actions and highlighting the correct settings.
\begin{center}
   \includegraphics[width=170mm]{./img/tn5.png}
   \captionof{figure}{Error prevention}
\end{center}

6. Recognition rather than recall
The options in the navigation bar are always visible, and the rest of options are very easy to found in every moment.
\begin{center}
   \includegraphics[width=170mm]{./img/tn6.png}
   \captionof{figure}{Recognition rather than recall}
\end{center}

7. Flexibility and efficiency of use
The users can access to the sidebar menu in different ways.
\begin{center}
   \includegraphics[width=170mm]{./img/tn7.png}
   \captionof{figure}{Flexibility and efficiency of use}
\end{center}

8. Aesthetic and minimalist design
Dialogues doesn't contain information which is irrelevant or rarely needed. And the design is simple and clear.
\begin{center}
   \includegraphics[width=170mm]{./img/tn8.png}
   \captionof{figure}{Aesthetic and minimalist design}
\end{center}

9. Help users recognize, diagnose, and recover from errors
All the error messages contain a description of the error that allows the user to fix it.
\begin{center}
   \includegraphics[width=170mm]{./img/tn9.png}
   \captionof{figure}{Help users recognize, diagnose, and recover from errors }
\end{center}

10. Help and documentation
One of the main options of the sidebar menu is the help button. Furthermore, at the button of the page the footer contains information about the page and more help options (FAQs, About Us, Contact).
\begin{center}
   \includegraphics[width=170mm]{./img/tn10.png}
   \captionof{figure}{Help and documentation}
\end{center}

## 5.3. Van Duyne Patterns


\newpage

# 6. Used Technology

For implementing the web page, we have decided to use php code, which is pretty similar to html code, in the sense that html code behaves the same way in php files. Also, we have used css for specifying the design of the webpage (colors, font, size, etc), and javaScript to implement the scripts used for the web pages.  Additionally, to check the functionality of the php pages, we have used XAMMP, which is an application that provides a local server to your computer, so that the functionalities can be checked. To properly use this server, we have used a little bit of sql to create tables to store necessary information, such as the users, the comments, playlists and videos, and the information each of them has, like the likes and dislikes each video has, and the nickname and password of each user.


\newpage

# 7. Implementation Process

In final prototype we followed the number two, because after defined the main goal in our case is for children , it will be easier for them use and enjoy watching videos. But several parts we took from first prototype such as about us, help, more friendly and lovely design which will be more suitable for our desired users.

\begin{center}
   \includegraphics[width=170mm]{./img/tt1.jpeg}
   \captionof{figure}{}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/tt3.jpeg}
   \captionof{figure}{}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/tt4.jpeg}
   \captionof{figure}{}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/tt5.jpeg}
   \captionof{figure}{}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/tt6.jpeg}
   \captionof{figure}{}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/tt7.jpeg}
   \captionof{figure}{}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/tt8.jpeg}
   \captionof{figure}{}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/tt9.jpeg}
   \captionof{figure}{}
\end{center}
\begin{center}
   \includegraphics[width=170mm]{./img/tt2.jpeg}
   \captionof{figure}{}
\end{center}


\newpage

# 8. Conclusion and Personal Opinion

This practice is a great way of practicing the html, css and javascript code developed during the lab classes and the exercises. It is also a good opportunity to delve into our knowledge of code of webpages, since we could experience writing in php, which wasn’t explained in class.

Also, the analysis of the personas and the similar websites help us to understand and remember better the Nielsen’s heuristics and the Van Duyne patterns, as we are using them to analyze three different web pages that are similar to the one that we are developing.

We accomplished the initial goals of this lab and gained a lot of knowledge in the process. However, we have had to face some problems during the development of the exercises as a consequence of not being familiar with php programming language. Despite all these problems, we have carried out the practice in the best way that we could and now we think that we have a greater understanding of the theoretical concepts seen in class. Overall, this lab was challenging but it taught us a lot.
