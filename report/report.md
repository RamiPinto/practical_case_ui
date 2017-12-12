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



\newpage

# 3. Analysis and Evaluation

## 3.1. End Users Description

### User 1:


### User 2:


### User 3:


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
   \includegraphics[width=90mm]{./img/yn1.png}
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


### 3.2.1. Site 2: Movistar+

#### A) Context

Movistar+ is a subscription platform for digital television. The web platform was created with the aim of allowing users to access the digital TV channels package from any device with internet connection. TV programs can be stopped, fast forward, rewind or recorded while seeing. In addition to provide access to national and international television channels through the internet, it also includes the possibility of seeing Movies, series, sport matches, documentaries and more.

#### B) Nielsen's Heuristics

1. Visibility of system status

While reproducing videos we can see the progression bar.
When a content is charging there is an animation that point the work in progress.
\begin{center}
   \includegraphics[width=170mm]{./img/mn1_1.png}
   \captionof{figure}{Visibility of system status example 1}
\end{center}
\begin{center}
   \includegraphics[width=100mm]{./img/mn1_2.png}
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


### 3.2.1. Site 3:

#### A) Context

#### B) Nielsen's Heuristics

#### C) Van Duyne Patterns



\newpage

# 4. Previous Prototypes

## 4.1. Prototype 1

### 4.1.1. Main Goal

The first prototype, which was “Tubevision”, had the following main goal, which was explained in the third exercise:

“*Tubevision*, our video content platform, is a multimedia website for a diverse audience of users. Designed as an easy-to-use website, it features the ability to browse for content by category and to search for content through the use of a search box. Users to the website must subscribe in order to access the video content on the website, which spans from user-uploaded videos to TV streaming content to movies/films. In addition, *Tubevision* is accessible via a mobile device or a traditional desktop computer.

The webpage is monetized through two forms: 1) premium subscriptions and 2) pre-content video ads. Premium subscriptions are paid versions of subscription accounts which enables special features not available to non-premium subscribers, such as unlimited offline video downloads, unlimited movies, speech interface, and video advertisement-free content. Instead of invasive display ads on the side panel, non-premium users are shown short video ads spanning several seconds before their selected video content plays.”


### 4.1.2. Design

[comment1]: <> (We can write the main functionalities and put images of our prototypes)



## 4.2. Prototype 2

### 4.1.1. Main Goal

The second prototype, which was “ScoobyMovie”, had a much more similar main goal to this final website. It was also a video streaming website for children, where they can watch films and series oriented to them, and create playlists to save their favorite videos and share them with other people through social media. They can also leave comments and likes on the videos. The most notable difference between this website and “ScoobyMovie” is the design, which is totally different.

### 4.1.2. Design

[comment2]: <> (We can write the main functionalities and put images of our prototypes)


\newpage

# 5. New Prototype

## 5.1. Design Reasons

## 5.2. Nielsen's Heuristics

## 5.3. Van Duyne Patterns


\newpage

# 6. Used Technology

For implementing the web page, we have decided to use php code, which is pretty similar to html code, in the sense that html code behaves the same way in php files. Also, we have used css for specifying the design of the webpage (colors, font, size, etc), and javaScript to implement the scripts used for the web pages.  Additionally, to check the functionality of the php pages, we have used XAMMP, which is an application that provides a local server to your computer, so that the functionalities can be checked. To properly use this server, we have used a little bit of sql to create tables to store necessary information, such as the users, the comments, playlists and videos, and the information each of them has, like the likes and dislikes each video has, and the nickname and password of each user.


\newpage

# 7. Implementation Process


\newpage

# 8. Conclusion and Personal Opinion
