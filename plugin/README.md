# Roleplay Engine
The Roleplay Engine is a free Minecraft Plugin to start your Roleplay server.

## Configs.yml
This file will be changed during the development.
```YAML
# Author: Marco Cusano
# Plugin: Roleplay Engine
# Version: 1.0-SNAPSHOT
# License: GPL-3.0
# Compatibility:
# - LuckPerms: https://www.spigotmc.org/resources/luckperms.28140/
# - DeluxeMenus: https://www.spigotmc.org/resources/deluxemenus.11734/
# - Vegas (Casino Plugin): https://www.spigotmc.org/resources/vegas-%E2%AD%90-casino-plugin-%E2%96%BA-15-game-modes-1-12-1-20-2.92321/

############
# Database #
############

database:
  host: localhost
  port: 3306
  name: minecraft_roleplay
  prefix: roleplay
  user: root
  password: root

############
# Roleplay #
############

roleplay:

  ##########
  # Basics #
  ##########

  basics:

    # Thirst
    thirst:
      max: 72000
      decrease: # Decrease by {amount} each {ticks}
        standing: # 1 hour (If full)
          amount: 1
          ticks: 20
        walking: # 20 minutes (If full)
          amount: 3
          ticks: 20
        running: # 12 minutes (If full)
          amount: 5
          ticks: 20
      restore:
        material: minecraft:potion
        items:
          water:
            custom_model_data: 1
            display_name: "Cup of Water"
            lore:
              - "&bRestore: &e30% of your thirst"
            amount: 30 # Percentage, based on "thirst.max"
          water_liter:
            custom_model_data: 2
            display_name: "Bottle of Water (1l)"
            lore:
              - "&bRestore: &e80 of your thirst"
            amount: 80

  #############
  # Companies #
  #############

  # Bank
  bank:

    # Bank ATM
    atm:
      identifier: "bank_atm"
      item:
        material: minecraft:iron_block
        custom_model_data: 1
        display_name: "Bank ATM"
      gui:
        type: "internal" # "internal" or "deluxemenu" (require DeluxeMenus plugin)
        filename: "guis/bank.yml" # "guis/<menu>.yml" or "deluxemenuName" (require DeluxeMenus plugin)
      permissions:
        get: "roleplay.bank.atm.get" # /roleplay items get bank_atm
        interact: "roleplay.bank.atm.use" # Interact with the ATM
        bypassDeposit: "roleplay.bank.atm.bypass.deposit" # Bypass the deposit limits
        bypassWithdraw: "roleplay.bank.atm.bypass.withdraw" # Bypass the withdraw limits

    # Bank Cash Moneys
    cash:
      item:
        material: minecraft:emerald
      moneys:
        1cent:
          identifier: "bank_euro_001"
          custom_model_data: 1
          value: 0.01
        2cent:
          identifier: "bank_euro_002"
          custom_model_data: 2
          value: 0.02
        5cent:
          identifier: "bank_euro_005"
          custom_model_data: 3
          value: 0.05
        10cent:
          identifier: "bank_euro_010"
          custom_model_data: 4
          value: 0.10
        20cent:
          identifier: "bank_euro_020"
          custom_model_data: 5
          value: 0.20
        50cent:
          identifier: "bank_euro_050"
          custom_model_data: 6
          value: 0.50
        1euro:
          identifier: "bank_euro_1"
          custom_model_data: 7
          value: 1.00
        2euro:
          identifier: "bank_euro_2"
          custom_model_data: 8
          value: 2.00
        5euro:
          identifier: "bank_euro_5"
          custom_model_data: 9
          value: 5.00
        10euro:
          identifier: "bank_euro_10"
          custom_model_data: 10
          value: 10.00
        20euro:
          identifier: "bank_euro_20"
          custom_model_data: 11
          value: 20.00
        50euro:
          identifier: "bank_euro_50"
          custom_model_data: 12
          value: 50.00
        100euro:
          identifier: "bank_euro_100"
          custom_model_data: 13
          value: 100.00
        200euro:
          identifier: "bank_euro_200"
          custom_model_data: 14
          value: 200.00
        500euro:
          identifier: "bank_euro_500"
          custom_model_data: 15
          value: 500.00

    # Bank Credit Cards
    credit_cards:
      items:
        material: minecraft:paper
        types:
          standard:
            enabled: true
            custom_model_data: 1
            display_name: "&7Standard Credit Card"
            limits:
              balance: 10000
              deposit: 1000
              withdraw: 100
              usage: 500
            lore:
              - "&7&lStandard Credit Card"
              - "- &bMaximum balance: &e10.000,00€"
              - "- &bDeposit Limit (per day): &e1.000,00€"
              - "- &bWithdraw Limit (per day): &e100,00€"
              - "- &bUsage (per day): &e200,00€"
            permission_group: "default"
          silver:
            enabled: true
            custom_model_data: 2
            display_name: "&fSilver Credit Card"
            limits:
              balance: 100000
              deposit: 5000
              withdraw: 1000
              usage: 1000
            lore:
              - "&f&lSilver Credit Card"
              - "- &bMaximum balance: &e100.000,00€"
              - "- &bDeposit Limit (per day): &e5.000,00€"
              - "- &bWithdraw Limit (per day): &e1.000,00€"
              - "- &bUsage (per day): &e1.000,00€"
            permission_group: "default"
          gold:
            enabled: true
            custom_model_data: 3
            display_name: "&6Gold Credit Card"
            limits:
              balance: 1000000
              deposit: 20000
              withdraw: 10000
              usage: 10000
              lore:
                - "&f&lSilver Credit Card"
                - "- &bMaximum balance: &e1.000.000,00€"
                - "- &bDeposit Limit (per day): &e20.000,00€"
                - "- &bWithdraw Limit (per day): &e10.000,00€"
                - "- &bUsage (per day): &e10.000,00€"
            permission_group: "default"
          platinum:
            enabled: true
            custom_model_data: 4
            display_name: "&bPlatinum Credit Card"
            limits:
              balance: -1
              deposit: -1
              withdraw: -1
              usage: -1
              lore:
                - "&f&lSilver Credit Card"
                - "- &bMaximum balance: &eUnlimited"
                - "- &bDeposit Limit (per day): &eUnlimited"
                - "- &bWithdraw Limit (per day): &eUnlimited"
                - "- &bUsage (per day): &eUnlimited"
            permission_group: "vip"

    # Bank Checks
    checks:
      enabled: true
      limits:
        amount: 10000
        due_date: 10 # In days

  # Phone
  phone:

    # Phone Models
    models:
      material: minecraft:book
      list:
        basic:
          custom_model_data: 1
          applications:
            messenger: true
            phone: true
            school:
              - "votes" # Check your school votes
          games: false
          fingerprints: 0 # Amount of fingerprints to secure your phone
        standard:
          custom_model_data: 2
          applications:
            messenger: true
            phone: true
            school:
              - "votes"
              - "booking" # Booking system for private lessons and exams
          games: # require Vegas (Casino Plugin)
              - "stairs"
          fingerprints: 1
        advanced:
          custom_model_data: 3
          applications:
            messenger: true
            phone: true
            school:
              - "votes"
              - "booking"
          games:
            - "stairs"
            - "pyramid"
          fingerprints: 2

    # Phone antenna and networks
    antenna:
      item:
        material: minecraft:gold_block
        custom_model_data: 1
      networks:
        edge:
          identifier: "E", # Used in plans to define the limitation in networks join
          distance: 500 # in Blocks
          delay: 80 # in ticks, 5 seconds
          corruption: 30 # Percentage of adding &k randomly during a call
        hspa:
          identifier: "H",
          distance: 400
          delay: 60 # in ticks, 3 seconds
          corruption: 20
        umts:
          identifier: "3G"
          distance: 300
          delay: 40 # in ticks, 2 seconds
          corruption: 10
        lte:
          identifier: "4G"
          distance: 200
          delay: 20 # in ticks, 1 second
          corruption: 5
        5g:
          identifier: "5G"
          distance: 100
          delay: 0 # Send messages instantly
          corruption: 0 # No &k usage


    # Phone plans
    plans:
      basic:
        network: "E" # Acceptable values "E", "H", "3G", "4G", "5G"
        messages: 100
        minutes: 100
        price:
          type: "subscription" # Acceptable values "subscription" or "lifetime"
          each: 7 # at 00:00 each days (irrelevant for lifetime plans)
          amount: 10 # euros
      standard:
        network: "H"
        messages: 250
        minutes: 250
        price:
          type: "subscription"
          each: 7
          amount: 15
      giga:
        network: "3G"
        message: 500
        minutes: 500
        price:
          type: "subscription"
          each: 7
          amount: 20
      giga_plus:
        network: "4G"
        messages: 1000
        minutes: 1000
        price:
          type: "subscription"
          each: 7
          amount: 25
      giga_ultra:
        network: "5G"
        messages: 5000
        minutes: 5000
        price:
          type: "subscription"
          each: 7
          amount: 50
      unlimited:
        network: "4G"
        messages: -1 # Means unlimited
        minutes: -1 # Means unlimited
        price:
          type: "subscription"
          each: 7
          amount: 100
      family:
        network: "5G"
        messages: 1000
        minutes: 1000
        price:
          type: "lifetime"
          amount: 1000

    # Phone permissions
    permissions:
      use: "roleplay.phone.use"
      bypassFingerprints: "roleplay.phone.bypass.fingerprints"
```
