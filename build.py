#!/usr/bin/env python3
import json
import re
from pathlib import Path
from typing import Dict, List


def get_default() -> str:
    return "https://cyb.no"


def get_mappings() -> Dict[str, str]:
    data = Path("REDIRECTS").read_text()

    mappings: Dict[str, str] = {}
    aliases: List[str] = []

    linenr = 0
    for line in data.splitlines():
        linenr += 1

        # Skip comments and blank lines.
        if re.match(r"\s*#", line) is not None or line.strip() == "":
            continue

        # Target.
        if re.match(r"\s+", line):
            if len(aliases) == 0:
                raise Exception("Missing alias for target at line {}".format(linenr))

            target = line.strip()
            for alias in aliases:
                mappings[alias] = target

            aliases = []
            continue

        # Alias.
        aliases.append(line.strip() + ".cyb.no")

    return mappings


if __name__ == "__main__":
    data = {"default": get_default(), "mappings": get_mappings()}

    Path("mappings.json").write_text(json.dumps(data))
    print("Wrote mappings")
