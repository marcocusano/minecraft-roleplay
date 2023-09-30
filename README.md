# Minecraft Roleplay
The definitive guide to host and code your own Minecraft Roleplay Server!
Follow this guide to start a new self-configured Minecraft Server and a self-hosted Web Application.
Please do not edit the code if you're not prepared to debug it by yourself.
This Repo was made to self-host a working end-user project. If you find a bug from an existing feature you're free to open a pull request or contact me at [report@marcocusano.dev](mailto:report@marcocusano.dev)

**Do not ask for support if you edit the code of your own, breaking everything cuz you're a PiZzA ChatGPTer**.\
**That's a free project and you're free to use as free to leave! Don't you think so?**

## Requirements
- MySQL (v5.7+)
- NPM (v9.7.2+)
- Node.js (v18.16.0+)
- Java (17+)

## Installation
The following guides include a Web Server installation and a Minecraft Server pre-configuration:
- [Localhost](#) (Windows + Docker + ZeroTier + Paper]\
You can even check the `localhost` branch to get your pre-configured Docker localhost, then run `install.bat` for Windows Only
- [VPS or a Dedicated Server](#) (Ubuntu + Paper + _(optional) Velocity_)\
You can even check the `ubuntu` branch to get your pre-configured Ubuntu Server, then run `install-single.sh` for a single-server configuration or `install-multi.sh`

## Technical Details
- [Database Structure](https://github.com/marcocusano/minecraft-roleplay/wiki/Database-Structure)
- [Minecraft Plugin Classes](#)
- [Web Application Framework](#)

## Guides
- [How to add custom objects to Minecraft](#)
- [How to create an optimized resource-pack](#)
- [How to start a multi-server in Minecraft](#)

## FAQ

**Which server should I buy?**
> Of course, it depends on your Project budget and aspectative. How many players are looking to have? Are you a professional Owner looking for self-hosted solution (like a VPS or a Dedicated) or a pre-made solution?
I'm not here to teach anything about this but i can try to help you in few cases. Also, I'm not going to talk about pre-made solutions but self-hosted solutions. So, if you've a little budget you actually need a [Single-Server Configuration](#) if you've an higher budget or a Team you can try the [Multi-Server Configuration](#).


**Which Minecraft engine should I use?**
> [PaperMC](https://papermc.io/software/paper) implements both Bukkit and Spigot in a balanced and optmized performance. If you're looking for a Multi-server engine, you really need to use a Velocity, still from PaperMC Project. You can also create customizations using a [very-well-documented APIs](https://hub.spigotmc.org/javadocs/bukkit/). Those links may not be updated. You can even try to use Google!


**Which Minecraft plugins should I install?**
> There is an infinite archive of plugins on [SpigotMC](https://www.spigotmc.org). [Here is a list of core plugins and more](https://github.com/marcocusano/minecraft-roleplay/wiki/Minecraft-Useful-Plugins) suggestd for you as a good quickstart Roleplay.


**How can i customize my Minecraft Server?**
> [ItemsAdder](https://www.spigotmc.org/resources/%E2%9C%A8itemsadder%E2%AD%90emotes-mobs-items-armors-hud-gui-emojis-blocks-wings-hats-liquids.73355/), [ModelEngine] + [MythicMobs] and more and more and more... If you didn't see yet, [here is a list of core plugins and more](https://github.com/marcocusano/minecraft-roleplay/wiki/Minecraft-Useful-Plugins) to customize your server. Also, you can create custom resource-packs importing Custom Models made with [Blockbench](https://www.blockbench.net/)! [Here is a list of pre-made Roleplay models](https://github.com/marcocusano/minecraft-roleplay/wiki/Roleplay-Models)!


**Can I use Skript to develop features on my server?**
> The quick answer is NO. First of all it's not a programming language and offers a bad-performance on high volume o Players using complexed Skripts.
> You can even try to use it by yourself. [Here is a good website to start](https://skunity.com/). Also, you can join the [Discord Community](https://discord.gg/skript) that will help you.
> If you're a programmer and not a ChatGPTer you can try to learn Java directly. Or try to ask ChatGPT how to...
