### **WARNING!!! THE CURRENT GUIDE IS ACTUALLY JUST A WORKING PROGRESS DOCUMENTATION AND I SHARED TECHNICAL INFORMATIONS ONLY, SUCH AS [DATABASE STRUCTURE](https://github.com/marcocusano/minecraft-roleplay/wiki/Database-Structure). THE MINECRAFT PLUGIN ([Roleplay Engine](https://github.com/marcocusano/minecraft-roleplay/wiki/Roleplay-Engine)) AND THE VUE.JS WEB APPLICATION ([Roleplay Management System](https://github.com/marcocusano/minecraft-roleplay/wiki/Roleplay-Management-System)) ARE STILL UNDER DEVELOPMENT AS DESCRIBED BY THE FOLLOWING PHASES:**
- **Phase 1 (Current)** - [Pilot](https://github.com/marcocusano/pilot) and [Vue-Pilot](https://github.com/marcocusano/vue-pilot): A Slim PHP Framework and a Vue.js library to manage the Web Application;
- **Phase 2** - Layout: All web applications static pages, with static example datas;
- **Phase 3** - GodMode: A working web application with a god powers! (No login / No permissions);
- **Phase 4** - Web Release: The first working release of the web application;
- **Phase 5** - Goto Minecraft: An alpha version of the Minecraft plugin;

**YOU MAY CLONE THIS REPO WHEN THIS MESSAGE WILL BE REMOVED AND WHEN YOU SEE A VERSION ON TOP OF THIS README FILE!**

**IN THE MEANWHILE, HERE IS A PREVIEW SCREEN OF THE VUE.JS LOG-IN SCREEN! IT WILL CHANGE DURING THE DEVELOPMENT, SO STAY TUNED!!!**
![Minecraft Roleplay Management System](https://github.com/marcocusano/minecraft-roleplay/blob/main/assets/screen-login.png)

***

# Minecraft Roleplay
The definitive guide to host and code your own Minecraft Roleplay Server!
Follow this guide to start a new pre-configured Minecraft Server and Web Application.
This Repo was made to self-host a working end-user project. If you find a bug from an existing feature you're free to open a pull request.

**Do not ask for support if you edit the code of your own, breaking everything cuz you're a PiZzA ChatGPTer**.\
**That's a free project and you're free to use as free to leave! Don't you think so?**

## Requirements
- Java (17+)
- MySQL (5.2+)
- NPM (9.7+)
- Node.js (18.14+)
- PHP (8.2+)

## Server Setup
The following guides include a Web Server installation and a Minecraft Server pre-configuration:
- [Localhost](https://github.com/marcocusano/minecraft-roleplay/wiki/Localhost-Installation) (Windows + Docker + Paper)\
You can even check the `localhost` branch to get your pre-configured Docker and Paper localhost.
- [VPS or a Dedicated Server](https://github.com/marcocusano/minecraft-roleplay/wiki/Ubuntu-Installation) (Ubuntu + Paper + _(optional) Velocity_)\
You can even check the `ubuntu` branch to get your pre-configured Ubuntu Server, then run `install-single.sh` for a single-server configuration or `install-multi.sh`

## Technical Details
- [Database Structure](https://github.com/marcocusano/minecraft-roleplay/wiki/Database-Structure)
- [Roleplay Engine](https://github.com/marcocusano/minecraft-roleplay/wiki/Minecraft-Engine) (Minecraft Plugin)
- [Roleplay Management System (R.M.S.)](https://github.com/marcocusano/minecraft-roleplay/wiki/Roleplay-Management-System) (Web Application)

## FAQ

**Which server should I buy?**
> Of course, it depends on your Project budget and aspectative. How many players are you looking to have? Are you looking for a self-hosted solution (like a VPS or a Dedicated) or a pre-made solution?
I'm not going to talk about pre-made solutions but self-hosted solutions. So, if you've a little budget you actually need a [Single-Server Configuration](#). Instead, if you've an higher budget you can try the [Multi-Server Configuration](#).


**Which Minecraft Server engine should I use?**
> Absolutely [PaperMC](https://papermc.io/software/paper) fork of Spigot, fork of Bukkit. Implements both in a balanced and optmized performance. Instead, If you're looking for a multi-server engine (with a Lobby, for example), you may use Paper for your Lobby, Vannilla, etc. and [Velocity](https://papermc.io/software/velocity) as a Proxy mandatory. Also, if you are a Developer you should try to taking a look to a [very-well-documented APIs](https://jd.papermc.io/paper/1.20/index.html). Those links may not be updated, but you can even try to use Google!


**Which Minecraft plugins should I install?**
> There is an infinite-archive of plugins on [SpigotMC](https://www.spigotmc.org). [Here is a list of core plugins and more](https://github.com/marcocusano/minecraft-roleplay/wiki/Minecraft-Useful-Plugins) suggested for a good quickstart of your Roleplay Server.


**How can i customize my Minecraft Server?**
> [ItemsAdder](https://www.spigotmc.org/resources/%E2%9C%A8itemsadder%E2%AD%90emotes-mobs-items-armors-hud-gui-emojis-blocks-wings-hats-liquids.73355/), [ModelEngine](https://www.spigotmc.org/resources/conxeptworks-model-engine%E2%80%94ultimate-custom-entity-model-manager-1-16-5-1-20.79477/) + [MythicMobs](https://mythiccraft.io/index.php?pages/official-mythicmobs-download/) and more and more and more... If you didn't see yet, [here is a list of core plugins and more](https://github.com/marcocusano/minecraft-roleplay/wiki/Minecraft-Useful-Plugins) to customize your server. Also, you can create custom resource-packs importing Custom Models made with [Blockbench](https://www.blockbench.net/)! [Here is a list of pre-made Roleplay models](https://github.com/marcocusano/minecraft-roleplay/wiki/Roleplay-Models)!


**Can I use Skript to create custom features?**
> The quick answer is NO. First of all it's not a programming language and then offers a bad-performance on high volume of Players using complexed Skripts.
> But I'm not here to judge: you can even try to use it by yourself. [Here is a good website to start](https://skunity.com/). Also, you can join the [Discord Community](https://discord.gg/skript) that will help you a lot.
> If you're a programmer and not a ChatGPTer you can try to learn Java directly. Or maybe yes, try to ask ChatGPT how to...

## Testimonials
|                                                                                                                                           | **Project Name**                                                                   |
|-------------------------------------------------------------------------------------------------------------------------------------------|------------------------------------------------------------------------------------|
| [![AtlantisRP](https://github.com/marcocusano/minecraft-roleplay/blob/main/assets/testimonial-atlantisrp.png)](https://app.atlantisrp.it) | **AtlantisRP**: A PHP adaptation by CoralMC ([Preview](https://app.atlantisrp.it)) |
